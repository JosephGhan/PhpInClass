<?php
    include "header.php";
?>
<body>
    <h1>Add a Product</h1>
    <form method="post" action="">
        <input type="text" name="id" placeholder="Product ID"><br>
        <input type="text" name="name" placeholder="Product Name"><br>
        <input type="text" name="price" placeholder="Product Price"><br><br>
        <input type="submit" name="action" value="addProd">
    </form>
    <?php
        include "footer.php";
    ?>
</body>
</html>