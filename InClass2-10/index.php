<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $submissionType = filter_input(INPUT_POST, 'formType');

        switch ($submissionType)
        {
            case('login');
                $userName = filter_input(INPUT_POST, 'userName');
                if(!($userName))
                {
                    include "login.php";
                }
                else
                {
                    include "order.php";
                }
                break;
            case('order');
                $userName = filter_input(INPUT_POST, 'userName');
                echo($userName . "<br>");
                $ccard = filter_input(INPUT_POST, "ccard");
                echo ("Credit Card: $ccard<br/>");

                //radio selection
                $drink = filter_input(INPUT_POST, "drink");
                echo("Drink: $drink<br/>");

                //text area
                // $comment = filter_input(INPUT_POST, "comments");
                // $comments = htmlentities($comment);
                // echo("<br/>$comments");
                $commentsFiltered = filter_input(INPUT_POST, "comments", FILTER_SANITIZE_STRING);
                echo($commentsFiltered);

                //checkboxes
                $topping = filter_input(INPUT_POST, "top", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
                echo("<ul>");
                foreach ($topping as $value)
                {
                    echo("<li>$value</li>");
                }
                echo("</ul>");
                break;
            default:
                include "login.php";
        }
    ?>
</body>
</html>