<?php
    session_start();

    include "./model/database.php";
    //Get action to control switch statement
    $action = filter_input(INPUT_POST, "action");
    if (!$action)
    {
        $action = filter_input(INPUT_GET, 'action');
    }

    //Get username and password for login validation
    $userName = filter_input(INPUT_POST, "name");
    $password = filter_input(INPUT_POST, "password");

    //Error string for login
    $error = "";

    switch($action)
    {
        case 'login':
            if(isLogin($userName, $password))
            {
                //Sets session is login is valid
                $_SESSION['user'] = $userName;
                include "./view/admin.php";
            }
            else
            {
                //Sets error message and sends them back to main page
                $error = "<p>Username or Password Incorrect</p>";
                include "./view/products.php";
            }
        break;
        case 'viewDetails':
            //Gets id to recieve order information
            $id = filter_input(INPUT_GET, 'id');
            $orderInfo = getAnOrder($id);
            $items = getOrderItems($id);
            include "./view/orderDetails.php";
        break;
        case 'Add Product':
            //Gets product information to be put into database
            $productName = filter_input(INPUT_POST, "productName");
            $productCode = filter_input(INPUT_POST, "productCode");
            $listPrice = filter_input(INPUT_POST, "listPrice");
            $category = filter_input(INPUT_POST, "category");
            addProduct($productName, $productCode, $listPrice, $category);
            include "./view/admin.php";
        break;
        case "Add Category":
            //Gets gategory name to be put into database
            $categoryName = filter_input(INPUT_POST, "categoryName");
            addCategory($categoryName);
            include "./view/admin.php";
        break;
        case "Update Product":
            //Gets product id to be updated
            $productID = filter_input(INPUT_POST, "product");
            $product = getProductInfo($productID);
            //Sends users to a page preloaded with the old product information
            include "./view/update.php";
        break;
        case "Update":
            //Gets updated information from form and updates the database
            $id = filter_input(INPUT_POST, "id");
            $productName = filter_input(INPUT_POST, "productName");
            $productCode = filter_input(INPUT_POST, "productCode");
            $listPrice = filter_input(INPUT_POST, "listPrice");
            $category = filter_input(INPUT_POST, "category");
            updateProduct($productName, $productCode, $listPrice, $category, $id);
            include "./view/admin.php";
        break;
        case "Delete Product":
            //Gets product id to be turned off
            $productID = filter_input(INPUT_POST, "product");
            deleteProduct($productID);
            include "./view/admin.php";
        break;
        case "goBack":
            include "./view/admin.php";
        break;
        case "LogOut":
            //Destroys session
            session_destroy();
            $error = "Logged Out Successfully";
            //include "./view/products.php";
        default:
            include "./view/products.php";
    }
    
