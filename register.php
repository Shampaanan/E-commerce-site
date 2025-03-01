<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Registration</title>

    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/style-responsive.css" rel="stylesheet">

</head>

<body class="login-body">
<?php 

# TIPS # If you want you can use this Model Class, and create functions inside it to Connect to Database, and then do CRUD (Create, Read, Update, Delete) operation from Database - this will add bonus marks to you #

include("class/Model.php");

$model = new Model;

?>

<div class="container">

    <?php # TIPS # Your HTML Form starts here, you need to add necessary Attributes to the HTML Form to make it workable # ?>
    <form class="form-signin" >
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">APPLY HERE</h1>
            <img src="public/images/login-logo.png" alt=""/>
        </div>


        <div class="login-wrap">

            <?php

            # TIPS # Once HTML Form is submitted, you should check "below" that whether the Submit button is clicked or not #

            if(isset($_POST))
            {

                # TIPS # You need to run PDO Insert Query "here", and store the operator provided information into the Database #
                
                # TIPS # In the IF STATEMENT "below", check whether operator provided information is successfully saved to Database or not #

                if(1)
                {

                # TIPS # If all information is saved into Database, show a message "below" that the operator's application is submitted successfully | Save the operator's Account Status as Inactive # 

                    echo '
                    <div class="alert alert-success">
                        Your Application to be an Operator is Accepted!
                    </div>
                    ';

                }
                else
                {

                    # TIPS # If somehow the information is not saved into Database, then give an error message "below" #

                    echo '
                    <div class="alert alert-danger">
                        Failed! Please recheck your Information!
                    </div>
                    ';
                }
            }

            ?>

            <?php # TIPS # Put proper Name Attribute of each Input Field "below", so that you can receive these values in PHP after Form Submission # ?>
            <p>Enter your personal details below</p>
            <input type="text" autofocus="" placeholder="Full Name" class="form-control">
            <input type="text" autofocus="" placeholder="Address" class="form-control">
            <input type="text" autofocus="" placeholder="Zip" class="form-control">
            <select type="text" class="form-control padding-6px">
                <option>Bangladesh</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>Nepal</option>
                <option>Sri Lanka</option>
            </select>

            <hr>

            <p> Enter your account details below</p>
            <input type="text" autofocus="" placeholder="User Name" class="form-control">
            <input type="password" placeholder="Password" class="form-control">
            
            <button type="submit" class="btn btn-lg btn-login btn-block">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Already an Operator!
                <a href="index.php" class="">
                    Login
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
