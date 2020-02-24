<?php

    $files = file("products.txt");

    $submission = filter_input(INPUT_POST, 'formType');
    switch($submission)
    {
        case("Order");
            $name = filter_input(INPUT_POST, 'name');
            $product = filter_input(INPUT_POST, 'product');
            $quantity = filter_input(INPUT_POST, 'quantity');
            $fileName = str_replace(' ','',strtolower($name)) . '.txt';
            $orderInfo = "Name: " . $name . "\nProduct: " . $product . "Quantity: " . $quantity;
            //echo($orderInfo);
            file_put_contents($fileName, $orderInfo);
            include("orderComplete.php");
            break;
        default;
            include("orderForm.php");
            break;
    }

?>