<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a Product</h1>
    <form method="post" action="">
        <input type="text" name="id" placeholder="Product ID"><br>
        <input type="text" name="name" placeholder="Product Name"><br>
        <input type="text" name="price" placeholder="Product Price"><br>
        <input type="submit" value="Add Product">
    </form>
    <?php
        if (isset($_POST['id']))
        {
            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $price = filter_input(INPUT_POST, 'price');
            addProduct($id, $name, $price);
            //include "view/display_products.php";
            header("Location: index.php");
        }
    ?>
</body>
</html>