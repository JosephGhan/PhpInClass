<?php

    include "./model/database.php";

    $action = filter_input(INPUT_GET, 'action');

    if ($action == 'del')
    {
        $id = filter_input(INPUT_GET, 'id');
        deleteProduct($id);
        include "./view/products.php";
    }
    else
    {
        include "./view/products.php";
    }
