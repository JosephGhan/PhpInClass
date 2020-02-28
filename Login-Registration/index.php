<?php
    session_start();

    $action = filter_input(INPUT_POST, "login");
    if (!$action){
        $action = filter_input(INPUT_GET, "lo");
    }
    $userName = filter_input(INPUT_POST, "name");
    $names = file("names.txt");
    $size = sizeof($names);
    $error = "";

    function searchFile($size, $userName, $names)
    {
        //checks to see if entered name matches any in the text file
        for ($i = 0; $i < $size; $i++)
        {
            if ($userName == trim($names[$i]))
            {
                return true;
            }
        }
    }

    switch($action)
    {
        case 'Login':
            if (searchFile($size, $userName, $names))
            {
                $_SESSION['user'] = $userName;
                include "membersOnly.php";
            }
            else
            {
                $error = "<p>User Not Found</p>";
                include "login.php";
            }
        break;

        case 'Register':
            if (searchFile($size, $userName, $names))
            {
                $error = "<p>User already exists</p>";
                include "login.php";
            }
            else
            {
                //Gets current file contents
                $current = file_get_contents("names.txt");
                //Adds username to current contents
                $current .= "\n$userName";
                //Rewrites file with updated contents
                file_put_contents("names.txt", $current);
                $names = file("names.txt");
                $_SESSION['user'] = $userName;
                include "membersOnly.php";
            }
        break;

        case 'logOut':
            session_destroy();
            include "login.php";
        break;

        default:
            //echo "default";
            include "login.php";
    }