<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>
<body>
    <h1>Products</h1>
    <table>
    <tr>
        <th id='left'>Product Name:</th>
        <th id='right'>Price:</th>
    </tr>
    <?php
        $prodAry = getAll();

        foreach($prodAry as $product)
        {
            echo("<tr><td id='left'>$product[0]</td><td id='right'>$$product[1]</td><tr>");
        }
    ?>
    </table>
    <br>
    <br>
    <hr>
    <h3>Admin Login</h3>
    <?=$error ?>
    <form action="" method="post">
        <input type="text" name="name" id="" placeholder="Username"><br>
        <input type="password" name="password" id="" placeholder="Password"><br>
        <input type="submit" value="login" name="action" id="">
    </form>
    <br>
    <br>
    <footer>&copy; Joseph Ghan 2020</footer>
</body>
</html>