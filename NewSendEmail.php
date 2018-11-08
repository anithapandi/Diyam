<?php
require_once "phpMailer/PHPMailerAutoload.php";
$name ="Rya";
$email="priyals0014@gmail.com";
$mail = new PHPMailer;
$log_file = sprintf(__DIR__ . '/mail-%s.txt', (new \DateTime)->format('Ymd'));
$mail->SMTPDebug   = 1;
$mail->Debugoutput = function($message, $level) use($log_file) {
    error_log(sprintf("(%s) %s\r\n", $level, $message), 3, $log_file);
    return ;
};
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "priyals0014@gmail.com";
$mail->Password = "Sarangae123";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->From = ("priyals0014@gmail.com");
$mail->FromName = ("Priya");
$mail->addAddress("anitha@diyaminfotech.com", "Priya");
$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
if(!$mail->send())
{
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message has been sent successfully";
}
?>