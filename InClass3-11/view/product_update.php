<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit <?=$product[1]?></h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?=$product[0]?>" >
        <input type="text" name="item" value="<?=$product[1]?>" >
        <input type="text" name="price" value="<?=$product[2]?>" >
        <input type="submit" name="action" value="update">
    </form>
</body>
</html>