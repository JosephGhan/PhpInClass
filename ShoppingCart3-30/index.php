<?php
    session_start();

    include "./model/database.php";
    $action = filter_input(INPUT_POST, "action");
    if (!$action)
    {
        $action = filter_input(INPUT_GET, 'action');
    }
    $userName = filter_input(INPUT_POST, "name");
    $password = filter_input(INPUT_POST, "password");

    $error = "";

    switch($action)
    {
        case 'login':
            if(isLogin($userName, $password))
            {
                $_SESSION['user'] = $userName;
                include "./view/admin.php";
            }
            else
            {
                $error = "<p>Username or Password Incorrect</p>";
                include "./view/products.php";
            }
        break;
        case 'viewDetails':
            $id = filter_input(INPUT_GET, 'id');
            $orderInfo = getAnOrder($id);
            $items = getOrderItems($id);
            include "./view/orderDetails.php";
        break;
        case 'Add Product':
            $productName = filter_input(INPUT_POST, "productName");
            $productCode = filter_input(INPUT_POST, "productCode");
            $listPrice = filter_input(INPUT_POST, "listPrice");
            $category = filter_input(INPUT_POST, "category");
            addProduct($productName, $productCode, $listPrice, $category);
            include "./view/admin.php";
        break;
        case "Add Category":
            $categoryName = filter_input(INPUT_POST, "categoryName");
            addCategory($categoryName);
            include "./view/admin.php";
        break;
        case "Update Product":
            $productID = filter_input(INPUT_POST, "product");
            $product = getProductInfo($productID);
            include "./view/update.php";
        break;
        case "Update":
            $id = filter_input(INPUT_POST, "id");
            $productName = filter_input(INPUT_POST, "productName");
            $productCode = filter_input(INPUT_POST, "productCode");
            $listPrice = filter_input(INPUT_POST, "listPrice");
            $category = filter_input(INPUT_POST, "category");
            updateProduct($productName, $productCode, $listPrice, $category, $id);
            include "./view/admin.php";
        break;
        case "Delete Product":
            $productID = filter_input(INPUT_POST, "product");
            deleteProduct($productID);
            include "./view/admin.php";
        break;
        default:
            include "./view/products.php";
    }
    
