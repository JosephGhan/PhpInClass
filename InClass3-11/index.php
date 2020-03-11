<?php

    include "./model/database.php";

    $action = filter_input(INPUT_POST, 'action');
    if (!$action)
    {
        $action = filter_input(INPUT_GET, 'action');
    }


    if ($action == 'del')
    {
        $id = filter_input(INPUT_GET, 'id');
        deleteProduct($id);
        include "./view/products.php";
    }
    elseif ($action == 'edit')
    {
        $id = filter_input(INPUT_GET, 'id');
        $product = getAProduct($id);
        include "./view/product_update.php";
    }
    elseif ($action == 'update')
    {
        //echo("update time");
        updateProduct();
        include "./view/products.php";
    }
    else
    {
        include "./view/products.php";
    }
