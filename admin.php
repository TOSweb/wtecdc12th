<?php
include "config.php";
// Check user session or not
if(!isset($_SESSION['uid']))
{
    header('Location: admin_login.php');
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
    <link rel="stylesheet" href="img/styless.css">
    <style>
        @media only screen and (max-width: 600px) {
            .video-content{margin-top: 80px;
    height: 800px;}
    .about-area {

    padding: 30px 0;
}
.panel .panel-body .table tbody tr td {
    color: #fff;
    font-size: 14px;
}
.panel .panel-body .table thead tr th {font-size: 16px;}
h6 {
    font-size: 13px;
}
}

.panel .panel-body .table tbody tr td {    font-size: 16px;
}
.panel .panel-body .table thead tr th {
    font-size: 15px;
}

.theme-btn1 {
    color: #000;
    background:#fff;
    }
</style>

</head>

<body class="home-3">

    <!-- preloader --
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->

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

<div class="video-content cta-area1 py-50" style="background-image: url('img/empoerbg.jpg');">
        <div class="container-fluid">
            
               <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">

                            <h2 class="site-title" style="color:#fff">Register/Sponsorship Details</h2>
    
                        </div>
                    </div>
                
                
 <div class="col-lg-7"></div>
                    <div class="col-lg-5" style="text-align: right;margin: 10px 0;">
            <a href="adminlogout.php" class="theme-btn theme-btn1 mt-20">Logout<i class="fas fa-arrow-right"></i></a>
              <a href="export.php" class="theme-btn theme-btn1 mt-20">Download File<i class="fas fa-arrow-right"></i></a>
                <a href="change_passord.php" class="theme-btn theme-btn1 mt-20">Change Password<i class="fas fa-arrow-right"></i></a>
            </div>
            </div>
  
    <div class="row">

        <div class="col-lg-12">
            <div class="panel">

                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                 <th>Date</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                 <th>Company</th>
                                  <th>Designation</th>
                                   <th>Type</th>
                                    <th>Paypal_tx_id</th>
                                    
                                      <th>Amount</th>
                                      <th>Status</th>
   
                            </tr>
                        </thead>
                        <tbody>
                            
<?php
$sql = "SELECT * FROM register where status='1'";
$result = $con->query($sql);
$count = 0;
while($row = $result->fetch_assoc()){
    
$fn	= $row['fn'];	//textbox name "txt_name"
		$ln	= $row['ln'];
		$email	= $row['email'];
		$phone	= $row['phone'];
		$company	= $row['company'];
		$designation	= $row['designation'];
		$type1	= $row['type1'];
		$paypal_tx_id	= $row['paypal_tx_id'];
		$payment_date	= $row['payment_date'];
		$amount	= $row['amount'];
		
		$paypal_tx_id	= $row['paypal_tx_id'];

		$invoice	= $row['invoice'];
	$price	= $row['amount'];
	 $count+=1;
		
?>

                            <tr>
                                <td><?php echo $count; ?></td>
                                   <td><?php echo $payment_date; ?></td>
                                <td><?php echo $fn; ?></td>
                                <td><?php echo $ln; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $phone; ?></td>
                                 <td><?php echo $company; ?></td>
                                <td><?php echo $designation; ?></td>
                                <td><?php echo $type1; ?></td>
                                <td><?php echo $paypal_tx_id; ?></td>
                             
                                <td>$<?php echo $amount; ?></td>
                                <td>Completed</td>
                            </tr>
                            
<?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

        <!-- cta area end -->

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

</body>
</html>