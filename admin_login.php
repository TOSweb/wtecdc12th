<?php
include "config.php";
 
if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $password = $_POST['pw'];

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser,id from admin where uname='".$uname."' and pw='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
         $id = $row['id'];

if($count > 0){
$_SESSION['uid'] = $id;
 header('Location: admin.php');
        }else{
            					echo "<script>
alert('Invalid User name Or Password');
window.location.href='admin_login.php';  
</script>";
        }

    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Tamils Economic Conference</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <!-- css --> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    select {
    padding: 16px 21px 15px 21px;
    border-radius: 50px;
    border: none;
    box-shadow: none;
    outline: 0 !important;
    }
    
    @media only screen and (max-width: 600px) {
         select {
    padding: 16px 21px 15px 21px;
    border-radius: 50px;
    border: none;
    box-shadow: none;width:100%;
            font-size: 12px !important;
    }
    
    .login-form {
        background: lightgray;
    }
    
    }
    </style>

</head>

<body class="home-3">

    <!-- header area -->
    <header class="header">
	
        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrap">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <img src="img/header.jpg" width="100%">
                         		<!--	 <div class="text-effect">
                <span data-content="12th World Tamils Economic Conference & Global Economic Summit 2025">12th World Tamils Economic Conference & Global Economic Summit 2025</span>
                
            </div> -->
                        </div>
         
                    </div>
                </div>
            </div>
        </div> 
		
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
        <a href="index.html" class="navbar-brand">
                        <img src="img/logo.png" alt="logo" width="200">
                    </a>
                    <div class="mobile-menu-right">
                          <a href="register.html" class="theme-btn">Register Now<i class="fas fa-arrow-right"></i></a>
                   
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html" data-bs-toggle="dropdown1">Home</a>
                         
                            </li>
                            <li class="nav-item "><a class="nav-link" href="about.html">About Us</a></li>

                           <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Organizers</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="organizing-committee.html">Organizing Committee</a></li>
                                    <li><a class="dropdown-item" href="state-representatives.html"> State Representatives</a></li>
                                   <!-- <li><a class="dropdown-item" href="international_coordinators.html"> International Coordinators</a></li> -->
                                    </ul>
                                    </li>
                                    
   <li class="nav-item"><a class="nav-link" href="speakers.html">Speakers</a></li> 

                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                        </ul>
                        <div class="nav-right">
                        
                            <div class="nav-right-btn">
                                <a href="register.html" class="theme-btn">Register Now<i class="fas fa-arrow-right"></i></a>
							
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header area end -->

    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->

    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url('img/inbg.jpg')">
            <div class="container">
                <h2 class="breadcrumb-title">Login</h2>
          
            </div>
        </div>
        <!-- breadcrumb end -->
        <!-- register area -->
        <div class="login-area pt-40 pb-40">
            <div class="container">
                <div class="col-md-6 mx-auto">
                    <div class="login-form" style="background: lightgray;">

    <form  method="POST" action="">
                            
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        
                            <div class="input-group">
                                <span class="input-group-text"><i class="far fa-user-tie"></i></span>
                                <input type="text" name="uname" class="form-control" placeholder="User Name" required>
                            </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-12">
                        
                            <div class="input-group">
                                <span class="input-group-text"><i class="far fa-eye"></i></span>
                                               <span class="fa fa-eye " id="togglePassword"  style="right: 30px;
    position: absolute;
    top: 18px;
    z-index: 10;"></span>
                                <input type="password" id="password-field" name="pw" class="form-control" placeholder="Password" required>
                            </div>
                    </div>
   

                    
                     <div class="col-md-6 col-lg-12">
                            
     
                            <div class="d-flex align-items-center">
                                <button type="submit" name="submit" class="theme-btn reg-btn"><span class="far fa-paper-plane"></span> Login Now</button>
                            </div>
                    </div>
                    </div>
                        </form>
       
                    </div>
                </div>
            </div>
        </div>
        <!-- register area end -->

    </main>

    <!-- footer area -->
    <footer class="footer-area">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                    <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="javascript:void(0);"> 12th World Tamils Economic Conference - </a> All Rights Reserved.
                        </p>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->

    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script>
  $(document).ready(function () {
  
     //  Toggle  Password Start
     $("#togglePassword").removeClass("fa fa-eye").addClass("fa fa-eye");
     $("#togglePassword").click(function() {
        const passwordInput = $("#password-field");
        const type = passwordInput.attr("type");

        if (type === "password") {
            passwordInput.attr("type", "text");
            $("#togglePassword").removeClass("fa fa-eye").addClass("fa fa-eye");
        } else {
            passwordInput.attr("type", "password");
            $("#togglePassword").removeClass("fa fa-eye").addClass("fa fa-eye");
        }
    });
    //  Toggle  Password End
    
  });

</script>

</body>
</html>