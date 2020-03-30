<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="./view/styles.css">
</head>
<body>
   <h1>Orders</h1>
   <table>
   <tr>
        <th>Order Date</th>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th></th>
   </tr>
   <?php
        $aryOrders = getAll();
        //var_dump($aryOrders);
        foreach($aryOrders as $order)
        {
            $date = date("m-d-y", strtotime($order[0]));
            echo("<tr><td>$date</td><td>$order[1]</td><td>$order[2], $order[3]</td><td><a href='.?action=viewDetails&id=$order[1]'>view details</a></td></tr>");
        }   
   ?>
   </table>
</body>
</html>