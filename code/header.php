<?php
// Ket noi CSDL 




$servername="localhost";
$username="root";
$password="";
$dbname="thuctap";


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
mysqli_query($conn,'set names utf8');

?>


<!DOCTYPE html>
<html lang="vi">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>T&T Checkout </title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="T&T Checkout">    
    <meta name="author" content="p-themes">
    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="admin/images/logo.png">
    <link rel="icon" type="image/png" sizes="40x20" href="admin/images/logo.png">  
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/logo.png">

    <link rel="apple-touch-icon" sizes="180x180" href="admin/images/logo.png">
    <link rel="icon" type="image/png" sizes="40x20" href="admin/images/logo.png">  
    <link rel="icon" type="image/png" sizes="16x16" href="admin/images/logo.png">

    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-3.css">
    <link rel="stylesheet" href="assets/css/demos/demo-3.css">
</head>



<!-- <div class="page"> -->
<div class="page-wrapper">
    <header class="header header-intro-clearance header-3">    
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <a href="tel:#"><i class="icon-phone"></i>Call: 1800 6601</a>
                </div>
                <div class="header-right">
                    <ul class="top-menu">
                        <li>
                            <a href="#">Links</a>
                            <ul>

                                <li>
                                    <?php
                                        if(!isset($_SESSION['dangnhap_home'])){
                                            echo '<a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a>';
                                        };
                                    ?>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->
        
<!-- register -->
 
        <!-- log in -->

        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>


                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

                            


    <div class="header-middle">
                <div class="container">
                                        <a href="blog-listingindex.php" class="logo"></a>
                                        <img src="https://i.ibb.co/QQWgtQD/image.png" alt="T&T" style= "width:1349 ;height:144">
                </div><!-- End .container --> 
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">                           
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">

                                </li>
                                
                                <li>
                               </li>
                                <li>
                               </li>

                                <li>
                                </li>
                                <li>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->       
        </header><!-- End .header -->