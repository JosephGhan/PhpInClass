<?php
    include "header.php";

    //$product = filter_input(INPUT_GET, 'product');
    //echo("hi".$id);
    //echo($product);
    //echo("hi"); 
    //$aryProduct = getAProduct($id);
    //echo($aryProduct);
?>
<body>
    <h1>Update a Product</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$product[0]?>" >
        <input type="text" name="name" value="<?=$product[1]?>" ><br><br>
        <input type="text" name="price" value="<?=$product[2]?>" ><br><br>
        <input type="submit" name="action" value="update">
    </form>
    <?php
        // if (isset($_POST['id']))
        // {
        //     $id = filter_input(INPUT_POST, 'id');
        //     $name = filter_input(INPUT_POST, 'name');
        //     $price = filter_input(INPUT_POST, 'price');
        //     addProduct($id, $name, $price);
        //     //include "view/display_products.php";
        //     header("Location: index.php");
        // }
        include "footer.php";
    ?>
</body>
</html>