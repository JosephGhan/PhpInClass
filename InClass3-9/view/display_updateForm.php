<?php
    include "header.php";

    //$product = filter_input(INPUT_GET, 'product');
    //echo("hi".$id);
    //echo($product);
    //echo("hi"); 
    $aryProduct = getAProduct($id);
    //echo($aryProduct);
?>
<body>
    <h1>Update a Product</h1>
    <form method="post" action="index.php?update=true">
        <input disabled type="text" name="id" value=<?=$aryProduct[0]?> ><br>
        <input type="text" name="name" value=<?=$aryProduct[1]?>><br>
        <input type="text" name="price" value=<?=$aryProduct[2]?>><br><br>
        <input type="submit" value="Update Product">
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