<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <?php
        $name = 'userName';
        $value = 'joe';
        $expire = strtotime('-1 year'); //'deletes' cookie
        setcookie($name, $value, $expire);
    ?>
    <h1>This site uses cookies to track down and sell your information</h1>

</body>
</html>