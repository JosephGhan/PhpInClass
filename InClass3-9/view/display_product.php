<?php
    include "header.php";
?>
<body>
    <?php
        //echo($id); 
        $aryProduct = getAProduct($id);
        //echo $aryProduct[1];
    ?>  
    <h1><?=$aryProduct[1] ?></h1>
    <p><?=$aryProduct[0] ?></p>
    <p><?="$$aryProduct[2]" ?></p>
    <br>
    <a href='?form="update"&id=<?=$aryProduct[0]?>'>Update Product</a>
    <?php
        include "footer.php" 
    ?>
</body>
</html>