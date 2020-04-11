<?php

    function sendMail($email, $name)
    {
        require "phpMailer/PHPMailerAutoload.php";
        $mail = new PHPMailer();

        $mail->isSMTP();
        
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = true;
        $mail->Username = "808.markley@gmail.com";
        $mail->Password = "Stitch!01";

        //compose email
        $mail->setFrom("808.markley@gmail.com", "");
        $mail->addAddress("$email", "$name");
        $mail->addReplyTo("808.markley@gmail.com", "Someone Else");

        $mail->isHTML(true);

        $mail->Subject = "Email Confirmation";
        $mail->Body = "<h1>Thank you $name</h1><p>You have been successfully signed up for our newsletter to be sent to $email</p>";
        //print_r($mail);
        if(!$mail->send())
        {
            // echo 'Message could not send';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
        else
        {
            // echo 'Message Sent';
            return true;
        }
    }