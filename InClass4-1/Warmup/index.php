<?php

    include "database.php";

    $action = filter_input(INPUT_POST, "action");

    if($action == "addCust")
    {
        echo("Added Customer");
        addCust();
    }
    else
    {
        include "form.php";
    }