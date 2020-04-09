<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>
<body>
    <?php
        setlocale(LC_MONETARY,"en_US");

        $date = date("m-d-y", strtotime($orderInfo[0]));
        echo("<p id='orderDetail'><strong>Order Date:</strong> $date</p>");
        echo("<p><strong>Customer Name:</strong> $orderInfo[1] $orderInfo[2]</p>");
        echo("<p><strong>Address:</strong><br>$orderInfo[3]<br>$orderInfo[4], $orderInfo[5] $orderInfo[6]</p>");

        //print_r($items);

        echo("<table><tr><th>Product</th><th>Qty</th><th>List Price</th><th>Subtotal</th></tr>");
        foreach($items as $item)
        {
            $total = (double)$item[1] * (double)$item[2];
            $total = number_format($total, 2,'.', ',');
            $item[2] = number_format($item[2], 2,'.', ',');
            echo("<tr><td>$item[0]</td><td>$item[1]</td><td>$ $item[2]</td><td>$ $total</td></tr>");
        }
        echo("</table><br><br><a href='index.php?action=goBack'>Return to Home</a>");
    ?>
    <br>
    <br>
    <footer>&copy; Joseph Ghan 2020</footer>
</body>
</html>