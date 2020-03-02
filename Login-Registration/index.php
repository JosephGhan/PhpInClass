<?php
    session_start();

    $action = filter_input(INPUT_POST, "login");
    if (!$action){
        $action = filter_input(INPUT_GET, "lo");
    }
    $userName = filter_input(INPUT_POST, "name");
    $password = filter_input(INPUT_POST, "password");
    // $names = file("names.txt");
    
    $error = "";

    $file = fopen("names.txt", "rb");
    while (!feof($file))
    {
        $names[] = explode(",", trim(fgets($file)));
    }
    // print_r($names[0][0]);
    // print_r($names[0][1]);
    $size = sizeof($names);


    function searchFile($size, $userName, $names, $password)
    {
        //checks to see if entered name matches any in the text file
        for ($i = 0; $i < $size; $i++)
        {
            if ($userName == $names[$i][0])
            {
                if ($password == $names[$i][1])
                {
                    return true;
                } 
            }
        }
    }

    switch($action)
    {
        case 'Login':
            if (searchFile($size, $userName, $names, $password))
            {
                $_SESSION['user'] = $userName;
                include "membersOnly.php";
            }
            else
            {
                $error = "<p>Username or Password Incorrect</p>";
                include "login.php";
            }
        break;

        case 'Register':
            if (searchFile($size, $userName, $names, $password))
            {
                $error = "<p>Username already exists</p>";
                include "login.php";
            }
            else
            {
                //Gets current file contents
                //$current = file_get_contents("names.txt");
                //Adds username to current contents
                //$current .= "\n$userName";
                //Rewrites file with updated contents
                //file_put_contents("names.txt", $current);
                $current = fopen("names.txt", "ab");
                fwrite($current, "\n$userName,$password");
                fclose($current);
                
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