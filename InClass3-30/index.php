<?php

    include "./model/database.php";

    $action = filter_input(INPUT_POST, 'action');
    if (!$action)
    {
        $action = filter_input(INPUT_GET, 'action');
    }

    if ($action == 'viewDetails')
    {
        $id = filter_input(INPUT_GET, 'id');
        $orderInfo = getAnOrder($id);
        $items = getOrderItems($id);
        include "./view/orderDetails.php";
    }
    else
    {
        include "./view/orders.php";
    }

