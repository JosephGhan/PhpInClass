<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles.css" rel="stylesheet">
    <title>Order Form</title>
</head>
<body>
    <div>
        <h1>Order Form</h1>
        <form action="index.php" method="post">
            <label>Name:</label>
            <input type="text" name="name" id=""><br><br>
            <label>Choose a Product:</label>
            <select name="product" id="">
            <?php
                foreach($files as $file)
                {
                    echo("<option value='$file'>$file</option>");
                }
            ?>
            </select><br><br>
            <label>Quantity:</label>
            <select name="quantity" id="">
                <?php
                    for($i = 1; $i < 21; $i++)
                    {
                        echo("<option value='$i'>$i</option>");
                    }
                ?>
            </select><br><br>
            <input type="submit" value="Order" name="formType"><br>
        </form>
    </div>
</body>
</html>