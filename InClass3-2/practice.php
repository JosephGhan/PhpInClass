<?php
    $products = array();
    $products[] = array('MMS-1234', 'Trumpet', '199.95');
    $products[] = array('MMS-8521', 'Flute', '149.99');

    $file = fopen('products.csv', 'wb'); //ab append
    foreach($products as $product)
    {
        fputcsv($file, $product);
    }
    fclose($file);

    $file = fopen('products.csv', 'rb');
    $products = array();
    while(!feof($file))
    {
        $product = fgetcsv($file);
        $products[] = $product;
    }

    print_r($products);
    fclose($file);
?>