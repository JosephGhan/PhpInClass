<?php

$username = 'class';
$password = 'cis239';
$host = 'localhost';
$dbname = 'products';

try 
{
    $db = new mysqli($host, $username, $password, $dbname);
} 
catch (Exception $e)
{
    exit ($e -> getMessage());
}


function getProducts()
{
    global $db;

    $string = mysqli_query($db, 'SELECT * FROM product');

    $dbArray = mysqli_fetch_all($string);
    //print_r($dbArray);
    return($dbArray);
}