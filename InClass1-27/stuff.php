<?php

    //if statments with condidtions
    $age = 17;
    $score = 600;

    if ($age < 18){
        echo ("You are too young for a loan");
    } else if ($score < 700){
        echo ("Your score is too low");
    } else {
        echo("Yay!");
    }