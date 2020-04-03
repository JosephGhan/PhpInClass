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

    function getAll()
    {
        global $db;
        $sql = 'SELECT productName, listPrice FROM products WHERE active = 1';
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($qry);
        return $rs;
    }
