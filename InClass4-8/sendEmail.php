<?php

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
    $mail->setFrom("markleyk@otc.edu", "Kirsten");
    $mail->addAddress("am0742552@otc.edu", "Andrew");
    $mail->addReplyTo("808.markley@gmail.com", "Someone Else");

    $mail->isHTML(true);

    $mail->Subject = "Kirsten Is Spamming ME";
    $mail->Body = "<h1>SEND DR PEPPER or get an <strong>F</strong></h1>";
    //print_r($mail);
    // for ($i = 0; $i < 3; $i++)
    // {
        if(!$mail->send())
        {
            echo 'Message could not send';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
        else
        {
            echo 'Message Sent';
        }
    // }