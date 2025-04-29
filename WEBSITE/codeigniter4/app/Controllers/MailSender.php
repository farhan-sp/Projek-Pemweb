<?php
namespace App\Controllers;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require APPPATH . 'ThirdParty/PHPMailer/src/SMTP.php';
require APPPATH . 'ThirdParty/PHPMailer/src/Exception.php';
require APPPATH . 'ThirdParty/PHPMailer/src/PHPMailer.php';

class MailSender extends BaseController {
    public function gmail() {
        if($this->request->getMethod() === 'POST') {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $pesan = $this->request->getPost('pesan');
            
            var_dump($nama, $email, $pesan);
            $mail = new PHPMailer(true);
            
            try {
                $mail->isSMTP();
                $mail->Host = "smtp.gmail.com";
                $mail->SMTPAuth = true;
    
                $mail->Username = getenv('EMAIL_USAHA');
                $mail->Password = getenv('APP_PASSWORD');
                $mail->SMTPSecure = "tls";
                $mail->Port = 587;
    
                $mail->setFrom($email, "GSK Properti Customer");
                $mail->addAddress(getenv('EMAIL_USAHA'));
    
                $mail->isHTML(false);
                $mail->Subject = "Feedback baru dari $nama";
                $mail->Body = "Nama : $nama\nEmail : $email\nPesan : $pesan";
    
                $mail->send();
            } catch (Exception $e) {
                return $this->response->setJSON(['error' => $mail->ErrorInfo]);
            }
        }
    }
}
?>