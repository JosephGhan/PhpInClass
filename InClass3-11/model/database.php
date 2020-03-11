<?php
//create a connection to our database
$username = "class";
$password = "cis239";
$host = "localhost";
$db_name = "products";

try {
$db = new mysqli($host, $username, $password, $db_name);

    echo ("Works!");
} catch(Exception $e) {
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