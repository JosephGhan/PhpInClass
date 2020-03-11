<?php

    //create a  connection to our database
    $username = "class";
    $password = "cis239";
    $host = "localhost";
    $db_name = "products";

    try 
    {
        $db = new mysqli($host, $username, $password, $db_name);
        //echo ("yay!");
    }
    catch (Exception $e)
    {
        exit ($e -> getMessage());
    }

    function getProducts()
    {
        global $db;
        $sql = "SELECT * from product ORDER BY `product`. `name` ASC";
        //echo($sql);
        $query = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($query);
        //print_r($rs);
        return($rs);
    }

    function getAProduct($id) 
    {
        global $db;
        $sql = "SELECT * from `product` WHERE `id` = '$id'";
        //echo($sql);
        $query = mysqli_query($db, $sql);
        $rs = mysqli_fetch_array($query);
        return($rs);
    }

    function addProduct()
    {
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        global $db;
        $sql = "INSERT INTO `product` (`id`, `name`, `price`) VALUES ('$id', '$name', '$price')";
        $query = mysqli_query($db, $sql);
        
    }

    function updateProduct()
    {
        global $db;
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
        $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price' WHERE id = '$id'";
        $qry = mysqli_query($db, $sql);
    }