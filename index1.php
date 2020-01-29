<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>January 29th</title>
    <?php
        include "functions.php";
    ?>
</head>
<body>
    <h2><?=todaysDate()?></h2>
    <h1>Do you qualify for a loan?</h1>
    <?php
        if (isset($_GET['score'])){
            $age = $_GET['age'];
            $score = $_GET['score'];
            if($score >= 680 && $age >=18)
            {
                echo("you qualify");
            } else 
            {
                if ($age < 18) {
                    yearsToGo($age);
                }
                echo("you don't qualify");

                if($score < 680){
                    echo(diffInScore($score) . " More Points Needed");
                }
            }
        } else {
        include("qualify.php");
        }
    ?>
</body>
</html>
