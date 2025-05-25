<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'faisalking3rd@gmail.com';      // <-- Your Gmail address
        $mail->Password = 'ifru wism wskc olrd';         // <-- Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('faisalking3rd@gmail.com', 'Your Name');
        $mail->addAddress('faisalking3rd@gmail.com');     // <-- Your inbox

        $mail->isHTML(false);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body = "Name: {$_POST['name']}\nEmail: {$_POST['email']}\n\nMessage:\n{$_POST['message']}";

        $mail->send();
        echo 'Message sent successfully!';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>

