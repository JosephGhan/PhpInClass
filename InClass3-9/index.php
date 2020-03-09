<?php
    include "model/database.php";
    
    $id = filter_input(INPUT_GET, 'id');
    $addProd = filter_input(INPUT_GET, 'form');
    $update = filter_input(INPUT_GET, 'update');

    if (isset($_POST['id']))
    {
        echo("here product");
        if (isset($update))
        {
            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $price = filter_input(INPUT_POST, 'price');
            updateProduct($id, $name, $price);
            header("Location: index.php");
            echo("here");
        }
        else 
        {
            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $price = filter_input(INPUT_POST, 'price');
            addProduct($id, $name, $price);
            header("Location: index.php");
            echo("here add");
        }
    }
    elseif ($addProd == null) {
        if ($id == null)
        {
            include "view/display_products.php";
        } else
        {
            include "view/display_product.php";
        }
    } 
    else 
    {
        include "view/display_updateForm.php";
    }
?>
