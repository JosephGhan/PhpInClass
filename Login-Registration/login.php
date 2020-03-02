<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Welcome to the Members Club</h1>
        <h3 class="lead">Please enter or register your username</h3>
        <?=$error ?>
        <form action="" method="post">
            <div class="form-group" id="formDiv">
                <input class="form-control" type="text" name="name" id="" placeholder="Username"><br>
                <input class="form-control" type="password" name="password" id="" placeholder="Password"><br>
                <input class="btn btn-primary" type="submit" value="Login" name="login" id="">
                <input class="btn btn-primary" type="submit" value="Register" name="login" id="">
            </div>
        </form>
        <hr class="my-4">
        <h3>About Us</h3>
        <p id="left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent gravida consequat tellus non cursus. 
            In rhoncus scelerisque massa in molestie. Vestibulum tellus elit, rhoncus a scelerisque sit amet, malesuada
             id odio. Pellentesque erat felis, vulputate nec metus eget, finibus semper augue. Duis nec dignissim nunc, 
             a dapibus sem. In in mattis ante. Nullam nunc libero, sagittis sit amet nisl nec, vestibulum venenatis ipsum.</p>
        <p id="left">Morbi egestas faucibus euismod. Vestibulum id urna ipsum. Nulla ornare fermentum leo lobortis dignissim. Aliquam sit 
            amet nisl in massa viverra fermentum. Duis ligula velit, sollicitudin egestas elementum id, volutpat ut enim. Nam
             molestie libero at lorem sodales, non consequat mi placerat. Phasellus luctus est sed augue aliquet, sed ullamcorper 
             est condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris 
             non ultrices nibh. Sed pretium dapibus ante eget mollis. Quisque neque ligula, lobortis a purus a, placerat pellentesque 
             arcu. Etiam dolor nibh, tincidunt ut nunc id, interdum aliquam nulla.</p>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>