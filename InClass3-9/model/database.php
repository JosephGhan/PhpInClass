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

    function addProduct($id, $name, $price)
    {
        global $db;
        $sql = "INSERT INTO `product` (`id`, `name`, `price`) VALUES ('$id', '$name', '$price')";
        $query = mysqli_query($db, $sql);
        
    }

    function updateProduct($id, $name, $price)
    {
        echo("here");
        global $db;
        $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price' WHERE `product`.`id` = '$id'";
        echo($sql);
        $query = mysqli_query($db, $sql);
    }