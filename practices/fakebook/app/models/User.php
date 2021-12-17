<?php

require_once 'app/vendor/PHPMailer/PHPMailer.php';
require_once 'app/vendor/PHPMailer/SMTP.php';
require_once 'app/vendor/PHPMailer/Exception.php';

Use PHPMailer\PHPMailer\PHPMailer;

class User extends Model
{
    public function __construct ($name, $username, $email, $password) {
        parent::__construct();
        $password = password_hash($password, PASSWORD_BCRYPT);
        $name = $this->cleanText($name);
        $username = $this->cleanText($username);
        $email = $this->cleanText($email);
        $token = md5($email);
        $sql = "INSERT INTO users (name, user, email, password, token) VALUES ('$name', '$username', '$email', '$password', '$token')";
        if($this->query($sql)) {
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
            $mail->send();
        }
    }
    private function cleanText ($text) {
        return $this->real_escape_string(strip_tags($text));
    }
}
?>