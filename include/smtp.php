<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.pinaclecrest.online"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@pinaclecrest.online"; // Change Email Address
        $mail->Password = '@SECpinaclecrest1'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@pinaclecrest.online','Pinacle Crest Bank'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@pinaclecrest.online", "Pinacle Crest Bank"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>