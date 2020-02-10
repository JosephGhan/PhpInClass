<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jan 27th</title>
    <style>.red {color:red; font-weight:bold} br {clear: left}</style>
</head>
<body>
    <?php
        // $age = 15;
        // $score = 880;
        if (isset($_GET['age']))
        {
            $age = $_GET['age'];
            $score = $_GET['score'];
            if ($age < 18 || $score < 700)
            {
                echo "<p class='red'>No loan for you!</p>";
            } else 
            {
                echo "<h1>Congrats</h1>";
                include "loanSuccess.php";
            }
        }
    ?>

    <form action="index.php" method="get">
        <select name="age">
            <?php
                for($i = 1; $i < 100; $i++)
                {
                    echo("<option value='$i'>$i</option>");
                }
            ?>
        </select><br>
        <input type="text" name="score" id=""><br>
        <input type="submit" value="Get a Loan">
    </form>
</body>
</html>