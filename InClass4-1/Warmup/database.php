<?php

$username = 'class';
    $password = 'cis239';
    $host = 'localhost';
    $db_name = 'guitar_shop';

    try
    {
        $db = new mysqli($host, $username, $password, $db_name);
    }
    catch (Exception $ex)
    {
        error_log($ex->getMessage());
        exit('Error connecting to the database');
    }

    function addCust()
    {
        global $db;
        $fName = filter_input(INPUT_POST, 'fName');
        $lName = filter_input(INPUT_POST, 'lName');

        $sql = "INSERT INTO  customers (firstName, lastName) values ('$fName', '$lName')";
        //echo($sql);
        $qry = mysqli_query($db, $sql);
        $theId = mysqli_insert_id($db);
        //$theId = $sqlNum = "SELECT custID FROM customers where lastName = '$lName'";
        echo($theId);

        
    }