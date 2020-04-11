<?php
    include "model/sendMail.php";

    $action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $error = "";

    switch($action)
    {
        case "send":
            if($email != "" && $name != "")
            {
                if(sendMail($email, $name))
                {
                    include "view/ThankYou.php";
                }
                else
                {
                    $error = "There was a problem sending the email";
                    include "view/form.php";
                }
            }
            else
            {
                $error = "Please enter your name and email";
                include "view/form.php";
            }
        break;
        default :
            include "view/form.php";
    }