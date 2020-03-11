<?php
//create a connection to our database
$username = "class";
$password = "cis239";
$host = "localhost";
$db_name = "products";

try 
{
    $db = new mysqli($host, $username, $password, $db_name);   
    //echo ("Works!");
} 
catch(Exception $e) 
{
    error_log($e->getMessage());
    exit('Error connecting to database'); //Should be a message a typical user could understand
}


function getAll()
{
    global $db;
    $sql = "select * from product";
    $qry = mysqli_query($db, $sql);
    $rs = mysqli_fetch_all($qry);
    return $rs;
}

function deleteProduct($id)
{
    global $db;
    $sql = "DELETE FROM product WHERE id = '$id'";
    //echo($sql);
    $qry = mysqli_query($db, $sql);
}

function getAProduct($id)
{
    global $db;
    $sql = "SELECT * FROM product WHERE id = '$id'";
    //echo($sql);
    $qry = mysqli_query($db, $sql);
    $rs = mysqli_fetch_array($qry);
    //print_r($rs);
    return($rs);
}

function updateProduct()
{
    global $db;
    $id = filter_input(INPUT_POST, 'id');
    $name = filter_input(INPUT_POST, 'item');
    $price = filter_input(INPUT_POST, 'price');
    $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price' WHERE id = '$id'";
    $qry = mysqli_query($db, $sql);
}