<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //echo($id); 
        $aryProduct = getAProduct($id);
    ?>  
    <h1><?=$aryProduct[1] ?></h1>
    <p><?=$aryProduct[0] ?></p>
    <?php
        include "display_footer.php" 
    ?>
</body>
</html>