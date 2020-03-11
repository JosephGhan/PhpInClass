<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Products</title>
</head>
<body>
    <h1>Display Products</h1>
    <?php
        foreach($products as $product)
        {
            echo("<p>ID: $product[0] Name: $product[1] Price: $$product[2]</p>");
        }
    ?>
</body>
</html>