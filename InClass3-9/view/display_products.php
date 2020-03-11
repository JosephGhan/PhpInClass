<?php
    include "header.php";
?>
<body>
    <h1>Display all products in my Database</h1>
    <?php
        $products = getProducts();
        //print_r($products);
        foreach($products as $product)
        {
            echo("<a href='?id=$product[0]&action=viewProd'>$product[0]</a> $product[1] $product[2]<br>");
        }
        include "footer.php"
    ?>
</body>
</html>