<?php

require_once 'app/vendor/PHPMailer/PHPMailer.php';
require_once 'app/vendor/PHPMailer/SMTP.php';
require_once 'app/vendor/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

class User extends Model
{

    protected $emailConfig;

    public function __construct($user = [])
    {
        $this->getEmailConfig();

        parent::__construct();

        if (count($user) > 0) {
            $password = password_hash($user['password'], PASSWORD_BCRYPT);
            $name = $this->cleanText($user['name']);
            $username = $this->cleanText($user['username']);
            $email = $this->cleanText($user['email']);
            $token = md5($email);
            $sql = "INSERT INTO users (name, user, email, password, token) VALUES ('$name', '$username', '$email', '$password', '$token')";
            if ($this->query($sql)) {
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
                $mail->Subject = '_ACCOUNT_ACTIVATION_';
                $mail->Body =  '_HI_' . $name . '<br>';
                $mail->Body .=  '_ACTIVATION_MESSAGE_' . '<br>';
                $mail->Body .= '<a href="https://localhost/adv-php/practices/fakebook/account/activate/' . $token . '">' . '_ACTIVATION_LINK_' . '</a>';
                $mail->send();
            }
        }
    }

    public function activate($token)
    {
        $token = $this->cleanText($token);

        $query = "UPDATE users SET active = 1 WHERE token = '$token'";

        return $this->query($query) or die($this->error);
    }

    private function getEmailConfig()
    {

        $this->emailConfig = json_decode(file_get_contents('app/config/email.json'), true);
    }
}
