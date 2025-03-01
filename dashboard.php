<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Admin Panel</title>

  <link href="public/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="public/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="public/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="public/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <link href="public/css/clndr.css" rel="stylesheet">

  <link href="public/css/style.css" rel="stylesheet">
  <link href="public/css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">
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


<?php 

# TIPS # Once Logout Button is submitted, you should check "below" that whether the Submit button is clicked or not (you can ensure it by checking whether the value of $_GET["exit"] is "yes" or not #

if( @$_GET['exit']=="yes" )
{
    session_destroy();
    header("Location: index.php");

    # TIPS # If Logout button is clicked, do your codes "below" to erase all the Session Variables of the operator, and redirect him/her to the Index (which is the Login) page #

}

?>

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="dashboard.php"><img src="public/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard.php"><img src="public/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href="dashboard.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Order</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Add Order</a></li>
                        <li><a href="#"> List Orders</a></li>

                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Customer</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Add Customer</a></li>
                        <li><a href="#"> List Customers</a></li>

                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Product</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Add Product</a></li>
                        <li><a href="#"> List Products</a></li>

                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Category</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Add Category</a></li>
                        <li><a href="#"> List Categories</a></li>

                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-laptop"></i> <span>Manage Admin</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="#"> Add Admin</a></li>
                        <li><a href="#"> List Admins</a></li>

                    </ul>
                </li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    
                    <?php # TIPS # Your Profile Management Menu goes "below" # ?>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="public/images/photos/user-avatar.png" alt="" />

                            <?php # TIPS # Show the Logged-in Operator's Full Name "below" from Session variable # ?> 
                            Nirjhor Anjum
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">

                            <?php # TIPS # Here while user hits the Logout button, you need to pass a value in Get Method (Keyword = exit, Value = yes) so that you can check whether the Button is clicked or not # ?>
                            <li><a href="?exit=yes"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row states-info">
            <div class="col-md-6">
                <div class="panel green-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> TOTAL ACTIVE OPERATOR </span>
                                <h4>

                                    <?php 

                                    # TIPS # You need to run SELECT COUNT query to get list of all Active Operators from the Database, and print "below" #

                                    echo $model->getCount("Active"); 

                                    ?>
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">  TOTAL INACTIVE OPERATOR  </span>
                                <h4>
                                    
                                    <?php 

                                    # TIPS # You need to run SELECT COUNT query to get list of all Active Operators from the Database, and print "below" #

                                    echo $model->getCount("Inactive"); 

                                    ?>

                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sales Chart

                        </header>
                        <div class="panel-body">
                            <div id="visitors-chart">
                                <div id="visitors-container" style="width: 100%;height:358px; text-align: center; margin:0 auto;">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>

            </div>
        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer>
            Powered By: Daraz International
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="public/js/jquery-1.10.2.min.js"></script>
<script src="public/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/modernizr.min.js"></script>
<script src="public/js/jquery.nicescroll.js"></script>

<script src="public/js/easypiechart/jquery.easypiechart.js"></script>
<script src="public/js/easypiechart/easypiechart-init.js"></script>

<script src="public/js/sparkline/jquery.sparkline.js"></script>
<script src="public/js/sparkline/sparkline-init.js"></script>

<script src="public/js/iCheck/jquery.icheck.js"></script>
<script src="public/js/icheck-init.js"></script>

<script src="public/js/flot-chart/jquery.flot.js"></script>
<script src="public/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="public/js/flot-chart/jquery.flot.resize.js"></script>
<script src="public/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="public/js/flot-chart/jquery.flot.selection.js"></script>
<script src="public/js/flot-chart/jquery.flot.stack.js"></script>
<script src="public/js/flot-chart/jquery.flot.time.js"></script>
<script src="public/js/main-chart.js"></script>

<script src="public/js/scripts.js"></script>


</body>

</html>
