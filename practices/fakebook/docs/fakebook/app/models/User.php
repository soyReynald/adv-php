<?php

require_once 'app/vendor/PHPMailer/PHPMailer.php';
require_once 'app/vendor/PHPMailer/SMTP.php';
require_once 'app/vendor/PHPMailer/Exception.php';

Use PHPMailer\PHPMailer\PHPMailer;

class User extends Model {

    protected $emailConfig;

    public function __construct($user = []){

        $this->getEmailConfig();

        parent::__construct();

        if(count($user) > 0){

            $password = password_hash($user['password'], PASSWORD_BCRYPT);
            $name = $this->clean($user['name']);
            $username = $this->clean($user['username']);
            $email = $this->clean($user['email']);
            $token = md5($user['email']);

            $query = "INSERT INTO users (name, user, email, token, password) VALUES ('$name', '$username', '$email', '$token', '$password')";

            if($this->query($query)){

                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $this->emailConfig['host'];
                $mail->SMTPAuth = true;
                $mail->Username = $this->emailConfig['username'];
                $mail->Password = $this->emailConfig['password'];
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->setFrom($this->emailConfig['from'], $this->emailConfig['name']);
                $mail->addAddress($email, $name);
                $mail->isHTML(true);
                $mail->Subject = App::$lang->activation_subject;
                $mail->Body = App::$lang->hi . ' ' . $name . '<br>';
                $mail->Body .= App::$lang->activation_message . '<br>';
                $mail->Body .= '<a href="localhost/fakebook/account/activate/' . $token . '">' . App::$lang->activation_link . '</a>';
                //$mail->send();

            }

        } 

    }

    public function activate($token){

        $token = $this->clean($token);

        $query = "UPDATE users SET active = 1 WHERE token = '$token'";

        return $this->query($query);

    }

    public function sendReset($email){

        $email = $this->clean($email);

        $sqlUser = "SELECT * FROM users WHERE email = '$email'";
        $rsUser = $this->query($sqlUser) or die($this->error);

        if($rsUser->num_rows > 0){

            $user = $rsUser->fetch_object();
            $token = md5(time());
            $sqlUpdate = "UPDATE users SET token = '$token' WHERE id = " . $user->id;
            $this->query($sqlUpdate) or die($this->error);

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = $this->emailConfig['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->emailConfig['username'];
            $mail->Password = $this->emailConfig['password'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->setFrom($this->emailConfig['from'], $this->emailConfig['name']);
            $mail->addAddress($email, $name);
            $mail->isHTML(true);
            $mail->Subject = App::$lang->password_reset_subject;
            $mail->Body = App::$lang->hi . ' ' . $name . '<br>';
            $mail->Body .= App::$lang->password_reset_message . '<br>';
            $mail->Body .= '<a href="localhost/fakebook/account/reset/' . $token . '">' . App::$lang->reset_link . '</a>';
            $mail->send();
            return true;

        } else {

            return false;

        }

    }

    public function resetPassword($password, $token){

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $sqlReset = "UPDATE users SET password = '$hash', token = '' WHERE token = '$token'";
        
        if($this->query($sqlReset)){
        
            return true;
        
        } else {

            return false;
        
        }

    }

    public function changePass($actual, $new){

        $sqlUser = "SELECT * FROM users WHERE id = " . Session::get('User')->id;
        $rsUser = $this->query($sqlUser) or die($this->error);

        if($rsUser->num_rows > 0){
            //return $rsUser->fetch_object();
            $user = $rsUser->fetch_object();
            
            if(password_verify($actual, $user->password)){

                $encPass = password_hash($new, PASSWORD_BCRYPT);
                
                $sqlChange = "UPDATE users SET password = '$encPass' WHERE id = " . Session::get('User')->id;
                $this->query($sqlChange) or die($this->error);

                return true;

            } else {

                return false;

            }

        } else {

            return false;

        }
        

    }

    public function checkEmail($email, $id){

        $sqlCheck = "SELECT id FROM users WHERE email = '$email' AND id != $id";
        $rsCheck = $this->query($sqlCheck) or die($this->error);

        if($rsCheck->num_rows > 0){

            return true;

        } else {

            return false;

        }

    }

    public function checkUsername($username, $id){

        $sqlCheck = "SELECT id FROM users WHERE user = '$username' AND id != $id";
        $rsCheck = $this->query($sqlCheck) or die($this->error);

        if($rsCheck->num_rows > 0){

            return true;

        } else {

            return false;

        }

    }

    public function updateUser($id, $name, $user, $email, $group){

        $id = $this->clean($id);
        $name = $this->clean($name);
        $user = $this->clean($user);
        $email = $this->clean($email);
        $group = $this->clean($group);
        $sqlUpdate = "UPDATE users SET name = '$name', user = '$user', email = '$email', id_group = $group WHERE id = $id";

        if($this->query($sqlUpdate)){

            return true;

        } else {

            return false;

        }

    }

    public function changeInfo($name, $username, $email){

        $name = $this->clean($name);
        $username = $this->clean($username);
        $email = $this->clean($email);

        $sqlChange = "UPDATE users SET name = '$name', user = '$username', email = '$email' WHERE id = " . Session::get('User')->id;

        if($this->query($sqlChange)){

            $sqlUpdate = "SELECT * FROM users WHERE id = " . Session::get('User')->id;
            $rsUpdate = $this->query($sqlUpdate) or die($this->error);

            Session::set('User', $rsUpdate->fetch_object());

            return true;

        } else {

            return false;

        }

    }

    public function getGroups(){

        $sqlGroups = "SELECT * FROM groups";
        $rsGroups = $this->query($sqlGroups) or die($this->error);

        if($rsGroups->num_rows > 0){

            $groups = array();
            while($row = $rsGroups->fetch_object()){

                $groups[] = $row;

            }

            return $groups;

        } else {

            return false;

        }

    }

    public function getUser($id){

        $sqlUser = "SELECT * FROM users WHERE id = $id";
        $rsUser = $this->query($sqlUser) or die($this->error);

        if($rsUser->num_rows > 0){

            return $rsUser->fetch_object();

        } else {

            return false;

        }

    }

    public function getUsers(){

        $sqlUsers = "SELECT * FROM users";
        $rsUsers = $this->query($sqlUsers) or die($this->error);

        if($rsUsers->num_rows > 0){

            $users = array();

            while($row = $rsUsers->fetch_object()){

                $users[] = $row;

            }

            return $users;

        } else {

            return false;

        }

    }

    public function toggleUser($id){

        $sqlToggle = "UPDATE users SET active = IF(active = 0, 1, 0) WHERE id = $id";
        
        if($this->query($sqlToggle)){

            return true;
        
        } else {
        
            return false;
        
        }

    }

    public function login($user, $password){

        $user = mysqli_real_escape_string($this, $user);

        $sqlLogin = "SELECT * FROM Users WHERE user = '$user'";

        $rsUser = $this->query($sqlLogin) or die($this->error);

        if($rsUser->num_rows > 0){

            $user = $rsUser->fetch_object();

            if(password_verify($password, $user->password)){

                return $user;

            } else {

                return false;

            }

        }

    }

    public function deleteUser($id){

        $sqlDelete = "DELETE FROM users WHERE id = $id";

        if($this->query($sqlDelete)){

            if(file_exists('public/img/users/' . $id . '.jpg')){
                unlink('public/img/users/' . $id . '.jpg');
            }

            return true;

        } else {

            return false;

        }

    }

    private function getEmailConfig(){

        $this->emailConfig = json_decode(file_get_contents('app/config/email.json'), true);

    }

}

?>