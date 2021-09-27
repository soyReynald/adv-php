<?php

require_once 'app/models/User.php';
require_once 'app/vendor/fpdf/fpdf.php';

class Account extends Controller {

    public function index(){

        $this->view('createAccount');

    }

    public function create(){
       
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User([
                        'name'=>$name,
                        'username'=>$username,
                        'email'=>$email,
                        'password'=>$password
                        ]);

        if($user){
            $this->redirect('/');
        } else {
            echo $user->error;
        }

    }

    public function activate($token){

        $user = new User;

        if($user->activate($token)){
            echo '_ACCOUNT_ACTIVE_';
        } else {
            echo '_NO_TOKEN_FOUND_';
        }

    }

    public function remember(){

        $this->view('remember');

    }

    public function sendReset(){

        $user = new User;

        if($user->sendReset($_POST['email'])){

            Errors::setMsg(App::$lang->got_email);
            $this->back();

        } else {

            Errors::setMsg(App::$lang->error_geting_email);
            $this->back();

        }

    }

    public function reset($token){

        $this->view('reset', ['token'=>$token]);

    }

    public function resetPassword(){

        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];
        $token = $_POST['token'];

        if(strlen($password) < 6){

            Errors::setMsg(App::$lang->short_password);
            $this->back();

        }

        if($password != $rpassword){

            Errors::setMsg(App::$lang->different_passwords);
            $this->back();

        }

        $user = new User;

        if($user->resetPassword($password, $token)){

            Errors::setMsg(App::$lang->password_changed);
            $this->redirect('/');

        } else {

            Errors::setMsg(App::$lang->error_reseting_password);
            $this->back();

        }

    }

    public function toggleUser($id){

        $user = new User;

        if($user->toggleUser($id)){

            Errors::setMsg(App::$lang->user_changed);
            $this->redirect('account/users');

        } else {

            Errors::setMsg(App::$lang->user_changed_error);
            $this->back();

        }

    }

    public function user($id){

        $user = new User;
        $person = $user->getUser($id);
        $groups = $user->getGroups();

        $this->view('user', ['id'=>$id, 'name'=>$person->name, 'username'=>$person->user, 'email'=>$person->email, 'group'=>$person->id_group, 'groups'=>$groups]);

    }

    public function updateUser(){

        $this->adminAccess();

        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['user'];
        $email = $_POST['email'];
        $group = $_POST['group'];

        $user = new User;

        if (trim($name) == "") {

            Errors::setMsg(App::$lang->empty_name);
            $this->back();

        }

        if (trim($username) == "") {

            Errors::setMsg(App::$lang->empty_username);
            $this->back();

        }

        if (trim($email) == "") {

            Errors::setMsg(App::$lang->empty_email);
            $this->back();

        }

        if ($user->checkEmail($email, $id)) {

            Errors::setMsg(App::$lang->email_used);
            $this->back();

        }

        if ($user->checkUsername($username, $id)) {

            Errors::setMsg(App::$lang->username_used);
            $this->back();

        }
        
        if($user->updateUser($id, $name, $username, $email, $group)){

            Errors::setMsg(App::$lang->user_info_updated);

        } else {

            Errors::setMsg(App::$lang->error_changing_info);

        }

        $this->back();

    }

    public function users(){

        $this->adminAccess();

        $user = new User;

        $allUsers = $user->getUsers();

        if($allUsers){

            $this->view('users', ['users'=>$allUsers]);

        } else {

            Errors::setMsg(App::$lang->no_users);
            $this->back();

        }

    }

    public function login(){

        $user = new User;

        $username = $user->clean($_POST['user']);
        $password = $_POST['password'];
        $login = $user->login($username, $password);

        if($login){

            Session::set('User', $login);
            $this->redirect('/');

        } else {

            echo '_WRONG_USER_OR_PASSWORD_';

        }

    }

    public function pdf($id){

        $user = new User;
        $person = $user->getUser($id);

        $pdf = new FPDF('P', 'mm', 'Letter');
        $pdf->AddPage();

        $pdf->Image('public/img/fakebook-logo.jpg', 10, 10);

        $pdf->SetY(30);

        $photo = 'public/img/users/no-img.jpg';
        if(file_exists('public/img/users/' . $person->id . '.jpg')){
            $photo = 'public/img/users/' . $person->id . '.jpg';
        }

        $pdf->Image($photo, 10, 40);

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, App::$lang->user_profile);

        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->Text(40, 45, App::$lang->user_id);
        $pdf->Text(40, 55, App::$lang->name);
        $pdf->Text(40, 65, App::$lang->username);
        $pdf->Text(40, 75, App::$lang->email);

        $pdf->SetFont('Helvetica', '', 10);
        $pdf->SetTextColor(128, 128, 128);
        $pdf->Text(45, 50, $person->id);
        $pdf->Text(45, 60, $person->name);
        $pdf->Text(45, 70, $person->user);
        $pdf->Text(45, 80, $person->email);

        $pdf->SetY(-30);
        $pdf->SetFont('Arial', 'I', 8);
        $pdf->Cell(0, 5, App::$lang->document_msg, 0, 0, 'C');

        $pdf->Output('D', 'user.pdf');

    }

    public function changeInfo(){

        $name = $_POST['name'];
        $username = $_POST['user'];
        $email = $_POST['email'];

        $user = new User;

        if(trim($name) == ""){

            Errors::setMsg(App::$lang->empty_name);
            $this->back();

        }

        if(trim($username) == ""){

            Errors::setMsg(App::$lang->empty_username);
            $this->back();

        }

        if (trim($email) == "") {

            Errors::setMsg(App::$lang->empty_email);
            $this->back();

        }

        if($user->checkEmail($email, Session::get('User')->id)){

            Errors::setMsg(App::$lang->email_used);
            $this->back();

        }

        if($user->checkUsername($username, Session::get('User')->id)){

            Errors::setMsg(App::$lang->username_used);
            $this->back();

        }

        if($user->changeInfo($name, $username, $email)){

            Errors::setMsg(App::$lang->user_info_updated);

        } else {

            Errors::setMsg(App::$lang->error_changing_info);

        }

        $this->redirect('account/profile');

    }

    public function changePass(){

        $actual = $_POST['actual'];
        $new = $_POST['new'];

        if(trim($new) == ""){

            Errors::setMsg(App::$lang->empty_password);
            $this->back();

        }

        if(strlen($new) < 6){

            Errors::setMsg(App::$lang->short_password);
            $this->back();

        }

        $user = new User;
        if($user->changePass($actual, $new)){

            Errors::setMsg(App::$lang->password_changed);

        } else {

            Errors::setMsg(App::$lang->error_changing_password);

        }

        $this->back();

    }

    public function profile(){

        $crop = file_exists('public/img/users/tmp/temp_' . Session::get('User')->id . '.jpg');

        $name = Session::get('User')->name;
        $username = Session::get('User')->user;
        $email = Session::get('User')->email;

        $this->view('profile', ['crop'=>$crop, 'name'=>$name, 'username'=>$username, 'email'=>$email]);

    }

    public function crop(){

        $x = $_POST['x'];
        $y = $_POST['y'];
        $w = $_POST['w'];
        $h = $_POST['h'];

        $newWidth = $newHeight = 100;
        $source = 'public/img/users/tmp/temp_' . Session::get('User')->id . '.jpg';
        $original = imagecreatefromjpeg($source);
        $croped = imagecreatetruecolor($newWidth, $newHeight);

        imagecopyresampled($croped, $original, 0, 0, $x, $y, $newWidth, $newHeight, $w, $h);

        imagejpeg($croped, 'public/img/users/' . Session::get('User')->id . '.jpg');
        unlink($source);

        $this->redirect('account/profile');

    }

    public function upload(){

        if(!is_uploaded_file($_FILES['photo']['tmp_name'])){
            exit('_ERROR_UPLOADING_FILE_');
        }

        $maxSizeKB = 500;
        $fileSizeKB = $_FILES['photo']['size'] / 1024;

        if($fileSizeKB > $maxSizeKB){
            //exit('_FILESIZE_EXCEEDS_500KB_');
            Errors::setMsg(App::$lang->filesize_exceeds);
            $this->back();  
        }

        switch($_FILES['photo']['type']){
            case 'image/jpeg':
                $original = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
            break;
            case 'image/png':
                $original = imagecreatefrompng($_FILES['photo']['tmp_name']);
            break;
            case 'image/gif':
                $original = imagecreatefromgif($_FILES['photo']['tmp_name']);
            break;
            default:
            exit('_NO_IMAGE_FILE_');
        }

        $imgData = getimagesize($_FILES['photo']['tmp_name']);

        $oldWidth = $imgData[0];
        $oldHeight = $imgData[1];

        $newWidth = $oldWidth;
        $newHeight = $oldHeight;

        if($oldWidth > 500){
            $newWidth = 500;
            $newHeight = round(($newWidth / $oldWidth) * $oldHeight);
        }

        $resized = imagecreatetruecolor($newWidth, $newHeight);
        $white = imagecolorallocate($resized, 255, 255, 255);
        imagefill($resized, 0, 0, $white);

        imagecopyresized($resized, $original, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);
        imagejpeg($resized, 'public/img/users/tmp/temp_' . Session::get('User')->id . '.jpg');

        $this->redirect('account/profile');
    }

    public function deleteUser($id){

        if(Session::get('User')->id == $id){

            Errors::setMsg(App::$lang->delete_yourself_error);
            $this->back();

        }

        $this->adminAccess();

        $user = new User;

        if($user->deleteUser($id)){

            Errors::setMsg(App::$lang->user_deleted);
          
        } else {

            Errors::setMsg(App::$lang->error_deleting_user);
            
        }

        $this->back();

    }

    public function logout(){

        Session::destroy();
        $this->redirect('/');

    }

    private function adminAccess(){

        if (!isset(Session::get('User')->id_group) or Session::get('User')->id_group > 1) {

            Errors::setMsg(App::$lang->access_denied);
            $this->back();

        }

    }

}

?>