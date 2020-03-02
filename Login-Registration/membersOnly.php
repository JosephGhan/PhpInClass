<?php
    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Members Only</h1>
            <p class="lead">Where our members feel at home</p>
            <hr class="my-4">
            <h4 id="white">Here is a quote from one of our famous members</h4>
            <?php
                // foreach ($names as $name)
                // {
                //     echo "<p id='white'>$name</p>";
                // }
                $quotes = array('"The greatest glory in living lies not in never falling, but in rising every time we fall." -Nelson Mandela', '"Your time is limited, so dont waste it living someone elses life. Dont be trapped by dogma – which is living with the results of other peoples thinking." -Steve Jobs',
                '"If you set your goals ridiculously high and its a failure, you will fail above everyone elses success." -James Cameron');
                $num = rand(0, count($quotes) - 1);
                echo "<p id='white'>$quotes[$num]</p>";
            ?>
            <hr class="my-4">
            <footer><a href="index.php?lo=logOut">Log Out</a></footer>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>