<?php
    include 'database.php';

    $products = getProducts();

    include('products.php');