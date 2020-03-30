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
        $sql = 'SELECT orderDate, orderID, lastName, firstName FROM orders JOIN customers ON orders.custID = customers.custID ORDER BY orderDate ASC';
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($qry);
        return $rs;
    }

    function getAnOrder($id)
    {
        global $db;
        $sql = "SELECT orderDate, firstName, lastName, address, city, state, zip FROM orders JOIN customers ON orders.custID = customers.custID WHERE orderID = '$id'";
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_array($qry);
        return($rs);
    }

    function getOrderItems($id)
    {
        global $db;
        $sql = "SELECT productName, qty, listPrice FROM orderitems JOIN products ON orderitems.productID = products.productID WHERE orderID = '$id'";
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($qry);
        return($rs);
    }