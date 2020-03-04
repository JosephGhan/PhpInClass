<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Display all products in my Database</h1>
    <?php
        $products = getProducts();
        //print_r($products);
        foreach($products as $product)
        {
            echo("<a href='?id=$product[0]'>$product[0]</a> $product[1] $product[2]<br>");
        }
        include "display_footer.php"
    ?>
</body>
</html>