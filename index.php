<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login Page</title>

    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/style-responsive.css" rel="stylesheet">

</head>

<body class="login-body">
<?php 
session_start();

# TIPS # If you want you can use this Model Class, and create functions inside it to Connect to Database, and then do CRUD (Create, Read, Update, Delete) operation from Database - this will add bonus marks to you #

include("class/Model.php");

$model = new Model;
$connection = $model->dbConnect();
if(!$connection){
    echo "Database Connection Failed!"."<br>";
}


?>

<div class="container">

    <?php # TIPS # Your HTML Form starts here, you need to add necessary Attributes to the HTML Form to make it workable # ?>
    <form class="form-signin" method="Post">

        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="public/images/login-logo.png" class="img-responsive" />
        </div>

        <div class="login-wrap">

            <?php

            # TIPS # Once HTML Form is submitted, you should check "below" that whether the Submit button is clicked or not #

            if(isset($_POST["login"]))
            {

                # TIPS # You need to run PDO Select Query "here", and check if operator given Email and Password is available at Database or not #
                
                # TIPS # In the IF STATEMENT "below" check whether Database's Email & Password matches with operator given Email & Password or not #
                $isUser=$model->tryLogin($_POST["email"], $_POST["password"]);

                if($isUser==true)
                {

                # TIPS # If Email & Password matches, put the Full Name, Email, and Login Time in 3 Session variables "here", and redirect the operator to Dashboard #
                    $_SESSION["email"] = $_POST["email"];
                    $_SESSION["email"] = time();
                    

                    header('Location:dashboard.php');
                    
                }
                else
                {

                    # TIPS # If Database's Email & Password doesn't match with operator given Email & Password, then give a fail message "here" #

                    echo '
                    <div class="alert alert-danger">
                        Sorry! Unable to Login!
                    </div>
                    ';
                }
            }

            ?>

            <?php # TIPS # Put proper Name Attribute of each Input Field "below", so that you can receive these values in PHP after Form Submission # ?>
            <input type="text" name="email" class="form-control" placeholder="Email Address" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">

            <button class="btn btn-lg btn-login btn-block" name="login" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Not an operator yet?
                <a class="" href="register.php">
                    Apply Here
                </a>
            </div>
        </div>

    </form>

</div>

<script src="public/js/jquery-1.10.2.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/modernizr.min.js"></script>

</body>

</html>
