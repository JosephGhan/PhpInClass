<?php
    include "model/database.php";
    
    $id = filter_input(INPUT_GET, 'id');
    // $addProd = filter_input(INPUT_GET, 'form');
    // $update = filter_input(INPUT_GET, 'update');
    $action = filter_input(INPUT_GET, 'action');

    switch($action)
    {
        case 'viewProd':
            include "view/display_product.php";
            break;
        case 'addProd':
            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $price = filter_input(INPUT_POST, 'price');
            addProduct($id, $name, $price);
            header("Location: index.php");
            echo("here add");
            break;
        case 'updateProd':
            $id = filter_input(INPUT_POST, 'id');
            $name = filter_input(INPUT_POST, 'name');
            $price = filter_input(INPUT_POST, 'price');
            updateProduct($id, $name, $price);
            header("Location: index.php");
            echo("here");
            break;
        case 'update':
            include "view/display_updateForm.php";
            break;
        case 'addProd':
            include "view/display_addForm.php";
            break;
        default:
            include "view/display_products.php";
    }




    // if (isset($_POST['id']))
    // {
    //     // echo("here product");
    //     // if ($update)
    //     // {
    //     //     $id = filter_input(INPUT_POST, 'id');
    //     //     $name = filter_input(INPUT_POST, 'name');
    //     //     $price = filter_input(INPUT_POST, 'price');
    //     //     updateProduct($id, $name, $price);
    //     //     header("Location: index.php");
    //     //     echo("here");
    //     // }
    //     // else 
    //     // {
    //         $id = filter_input(INPUT_POST, 'id');
    //         $name = filter_input(INPUT_POST, 'name');
    //         $price = filter_input(INPUT_POST, 'price');
    //         addProduct($id, $name, $price);
    //         header("Location: index.php");
    //         echo("here add");
    //     //}
    // }
    // elseif ($addProd == null) {
    //     if ($id == null)
    //     {
    //         include "view/display_products.php";
    //     } else
    //     {
    //         include "view/display_product.php";
    //     }
    // } 
    // else 
    // {
    //     include "view/display_updateForm.php";
    // }
?>
