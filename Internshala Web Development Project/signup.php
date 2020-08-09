<?php
require("includes/common.php");
?>
<?php
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML5 validations</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div class="space">
            <div class="container">  
        <?php
        require("includes/header.php");
        ?>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <h4>Signup Form</h4>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"  placeholder="Phone" name="phone" required = "true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
            <?php
            require("includes/footer.php");
            ?>
    </body>
</html>

