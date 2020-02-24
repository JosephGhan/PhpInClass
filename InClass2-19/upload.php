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
    include ("functions.php");
        //var_dump($_FILES);
        //or 
        //print_r($_FILES);
        //echo(sizeof($_FILES['file1']['name']));
        for($i = 0; $i < (count($_FILES['file1']['name'])); $i++) {
            //Get the temporary name
            $tmp_name = $_FILES['file1']['tmp_name'][$i];

            //Get the path to save the files
            $savePath = getcwd() . DIRECTORY_SEPARATOR . "images";
            //echo $savePath;

            //add the correct file name to the path
            $img = $_FILES['file1']['name'][$i];
            $imageName = $savePath . DIRECTORY_SEPARATOR . $img;

            //Move the uploaded file to the new location
            $success = move_uploaded_file($tmp_name, $imageName);

            if($success)
            {
                echo "Moved Successfully<br>";
                echo "<img src='images/$img'><br>";
            }
         }
    ?>
</body>
</html>