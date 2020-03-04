<?php
    include "model/database.php";
    
    $id = filter_input(INPUT_GET, 'id');
    $addProd = filter_input(INPUT_GET, 'form');

    
    //else {
        if ($addProd == null) {
            if ($id == null)
            {
                include "view/display_products.php";
            } else
            {
                include "view/display_product.php";
            }
        } else 
        {
            include "view/display_addForm.php";
        }
   // }
    

?>
