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

    function isLogin($userName, $passWord)
    {
        $users = getLogins();
        //print_r($users);
        foreach($users as $user)
        {
            if($userName == $user[0] && $passWord == $user[1])
            {
                return true;
            }
        }
    }

    function getLogins()
    {
        global $db;
        $sql = 'SELECT userName, userPWord FROM users';
        $qry = mysqli_query($db, $sql);
        $users = mysqli_fetch_all($qry);
        return $users;
    }

    function getAllOrders()
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

    function getCategories()
    {
        global $db;
        $sql = "SELECT * FROM categories";
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($qry);
        return($rs);
    }

    function addProduct($productName, $productCode, $listPrice, $category)
    {
        global $db;
        $sql = "INSERT INTO `products` ( `categoryID`, `productCode`, `productName`, `listPrice`, `active`) VALUES ( '$category', '$productCode', '$productName', '$listPrice', '1')";
        $qry = mysqli_query($db, $sql);
        //echo($category);
    }

    function addCategory($categoryName)
    {
        global $db;
        $sql = "INSERT INTO `categories` (`categoryName`) VALUES ('$categoryName')";
        $qry = mysqli_query($db, $sql);
    }

    function getProducts()
    {
        global $db;
        $sql = "SELECT productID, productName FROM products WHERE active = 1";
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($qry);
        return($rs);
    }
    
    function getProductInfo($id)
    {
        global $db;
        $sql = "SELECT * FROM products WHERE productID = '$id'";
        $qry = mysqli_query($db, $sql);
        $rs = mysqli_fetch_array($qry);
        return($rs);
    }

    function updateProduct($productName, $productCode, $listPrice, $category, $id)
    {
        global $db;
        $sql = "UPDATE `products` SET `categoryID` = '$category', `productCode` = '$productCode', `productName` = '$productName', `listPrice` = '$listPrice' WHERE `products`.`productID` = $id";
        $qry = mysqli_query($db, $sql);
    }

    function deleteProduct($id)
    {
        global $db;
        $sql = "UPDATE `products` SET `active` = '0' WHERE `products`.`productID` = $id";
        $qry = mysqli_query($db, $sql);
    }