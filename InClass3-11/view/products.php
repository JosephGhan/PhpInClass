<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

</head>
<body>

    <h1>All Products</h1>
    <?php
        $aryProducts = getAll();

        foreach ($aryProducts as $product)
        {
            echo ("$product[0] $product[1] $product[2] <a href='.?action=del&id=$product[0]'>del</a> | <a href='.?action=edit&id=$product[0]'>edit</a></br>");
        }

    ?>
    
</body>
</html>