<?php
    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
    $categories = getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>
<body>
    <h1>Update <?=$product[3]?></h1>
        <form action='' method='post'>
            <input type="hidden" name="id" id="" value="<?=$product[0]?>">
            <input type="text" name="productName" id="" value="<?=$product[3]?>"><br>
            <input type="text" name="productCode" id="" value="<?=$product[2]?>"><br>
            <input type="text" name="listPrice" id="" value="<?=$product[4]?>"><br>
            <select id="" name="category">
                <?php
                    foreach($categories as $category)
                    {
                        echo("<option value='$category[0]'>$category[1]</option>");
                    }
                ?>
            </select><br>
            <input type="submit" value="Update" name="action" id="">
        </form>
    <br>
    <br>
    <footer>&copy; Joseph Ghan 2020</footer>
</body>
</html>