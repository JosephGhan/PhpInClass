<?php
    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
    $categories = getCategories();
    $products = getProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>
<body>
    <h1>Orders</h1>
   <table>
    <tr>
            <th>Order Date</th>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th></th>
    </tr>
    <?php
            $aryOrders = getAllOrders();
            //var_dump($aryOrders);
            foreach($aryOrders as $order)
            {
                $date = date("m-d-y", strtotime($order[0]));
                echo("<tr><td>$date</td><td>$order[1]</td><td>$order[2], $order[3]</td><td><a href='.?action=viewDetails&id=$order[1]'>view details</a></td></tr>");
            }
    ?>
    </table>
   <br>
   <h1>Add New Product Category</h1>
        <form action='' method='post'>
            <input type="text" name="categoryName" id="" placeholder="Category Name"><br>
            <input type="submit" value="Add Category" name="action" id="">
        </form>
   <h1>Add a Product</h1>
        <form action='' method='post'>
            <input type="text" name="productName" id="" placeholder="Product Name"><br>
            <input type="text" name="productCode" id="" placeholder="Product Code"><br>
            <input type="text" name="listPrice" id="" placeholder="List Price"><br>
            <select id="" name="category">
                <?php
                    foreach($categories as $category)
                    {
                        echo("<option value='$category[0]'>$category[1]</option>");
                    }
                ?>
            </select><br>
            <input type="submit" value="Add Product" name="action" id="">
        </form>
   <h1>Edit a Product</h1>
        <form action='' method='post'>
            <label>Select product to update</label><br>
            <select id='' name="product">
                <?php
                    foreach($products as $product)
                    {
                        echo("<option value='$product[0]'>$product[1]</option>");
                    }
                ?>
            </select><br>
            <input type="submit" value="Update Product" name="action" id="">
        </form>
    <h1>Delete a Product</h1>
        <form action='' method='post'>
            <label>Select a product to delete</label><br>
            <select id='' name="product">
                <?php
                    foreach($products as $product)
                    {
                        echo("<option value='$product[0]'>$product[1]</option>");
                    }
                ?>
            </select><br>
            <input type="submit" value="Delete Product" name="action" id="">
        </form>
    <br>
    <br>
    <footer>&copy; Joseph Ghan 2020 <a href="index.php">Return to customer view</a></footer>
</body>
</html>