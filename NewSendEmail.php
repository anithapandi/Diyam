<?php
require_once "phpMailer/PHPMailerAutoload.php";
if(isset($_POST["submit"])){
    // Checking For Blank Fields..
    if($_POST["fname"]==""||$_POST["email"]==""||$_POST["message"]==""){
        echo "Please enter all the details..";
    }else{
        // Check if the "Sender's Email" input field is filled out
        $email=$_POST['email'];
        // Validate E-mail Address
        $email= filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $message = $_POST['message'];
            $email=$_POST['email'];
            $name=$_POST['fname'];
            //$headers = 'From:'. $email . "rn"; // Sender's Email
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            //$message = wordwrap($message, 70);
            // Send Mail By PHP Mail Function
            //mail("sekaranitha21@gmail.com", $message, $headers);
            //echo "Your mail has been sent successfuly ! Thank you for your feedback";
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
            $mail->Username = "priyals0014@gmail.com";//mail id and password that sends the detail
            $mail->Password = "Sarangae123";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->From = "priyals0014@gmail.com";
            $mail->FromName ="contact us";
            $mail->addAddress("anitha@diyaminfotech.com","Anitha");//mail id that receive the profile
            $mail->isHTML(true);
            $mail->Subject = "Contact us";
            $mail->Body = $message;
            //$mail->AltBody =$message;
            if(!$mail->send())
            {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            else
            {
                echo "Message has been sent successfully";
            }
        }
    }
}
?>