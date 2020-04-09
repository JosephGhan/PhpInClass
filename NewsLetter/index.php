<?php
    include "model/sendMail.php";

    $action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS);

    switch($action)
    {
        case "send":
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
            if(sendMail($email, $name))
            {
                include "view/ThankYou.php";
            }
            else
            {
                echo "Didn't Send";
            }
        break;
        default :
            include "view/form.php";
    }