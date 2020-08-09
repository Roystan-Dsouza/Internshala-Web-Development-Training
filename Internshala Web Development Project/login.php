<?php
    require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeStyle Store</title>
    </head>
    <body>
        <?php
        require("includes/header.php");
        ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4" style="padding-top: 100px">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                    <div><?phpecho $_GET['email_error']; ?></div>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                                    <div><?phpecho $_GET['password_error']; ?></div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require("includes/footer.php");
        ?>
    </body>
</html>