<?php
    session_start();

    $action = filter_input(INPUT_GET, 'lo');
    if (!$action){
        $action = filter_input(INPUT_POST, 'action');
    }
    switch($action)
    {
        case 'y':
            echo "Session destroyed";
            session_destroy();
            include "login.php";
        break;
        case 'Login':
            $txtname = filter_input(INPUT_POST, 'userName');

            if ($txtname == "Joe")
            {
                $_SESSION['user'] = "Joe";
                include 'membersOnly.php';
            }
            else
            {
                echo "No such user!";
                include "login.php";
            }
        break;

        default:
            include 'login.php';
    }