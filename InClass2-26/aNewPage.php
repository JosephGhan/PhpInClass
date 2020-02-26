<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
?>
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
        include "menu.php" 
    ?>
    <h1>This is a new page</h1>
</body>
</html>