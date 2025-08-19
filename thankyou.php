<?php
include "config.php";
// Check user session or not
if(!isset($_SESSION['uid'])){
    header('Location: register.html');
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
    .feature-item {height:auto;}
    .theme-btn1 {
    font-size: 19px;
    color: #fff;
    padding: 3px 50px 7px;
    }
    @media only screen and (max-width: 600px) {
         select {
    padding: 16px 21px 15px 21px;
    border-radius: 50px;
    border: none;
    box-shadow: none;width:100%;
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
                                  <!--  <li><a class="dropdown-item" href="international_coordinators.html"> International Coordinators</a></li> -->
                                    </ul>
                                    </li>
                  
  <!-- <li class="nav-item"><a class="nav-link" href="speakers.html">Speakers</a></li> -->
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

<div class="video-content cta-area1 py-50" style="background-image: url('img/Highlights.jpeg');">
    
        <div class="container">
            
    <?php $item_name = $_GET['item_name'];
	$item_number = $_GET['item_number'];
	$payment_status = $_GET['st'];
	$payment_amount = $_GET['amt'];
	$cc = $_GET['cc'];
	$txn_id = $_GET['tx'];
	$receiver_email = $_GET['receiver_email'];
	$payer_email = $_POST['payer_email'];

	?>
	
	<!-- registration start-->
	
<?php

include "config.php";
$sql = "SELECT * FROM register where invoice='$item_number' AND status='0'";

$result = $con->query($sql);
while($row = $result->fetch_assoc()){
    
$fn	= $row['fn'];	//textbox name "txt_name"
		$ln	= $row['ln'];
		$email	= $row['email'];
		$phone	= $row['phone_no'];
		$type2	= $row['type1'];
		$invoice	= $row['invoice'];
		$amount	= $row['amount'];
		$price = number_format((float)$payment_amount, 2, '.', '');

}

if (isset($invoice)){ 

$to="$email";
$msg= "Registration / Sponsorship Payment Successful";   
$subject="Registration /Sponsorship Payment Successful";
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:12th World Tamils Economic Conference <info@usindiasmecouncil.org> '."\r\n";
$headers .= 'Cc: info@usindiasmecouncil.org' . "\r\n";
        
$ms.="<html><body>";

$ms .= "Dear $fn $ln,";
$ms .= "<br>";
$ms .= "<br>";

$ms.="<table style='border-color: #666;' cellpadding='10'>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Invoice Number</strong> </td>";
$ms.="<td> $invoice </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>PayPal Transaction Id</strong> </td>";
$ms.="<td> $txn_id </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>First Name</strong> </td>";
$ms.="<td> $fn </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Last Name</strong> </td>";
$ms.="<td> $ln </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Email ID</strong> </td>";
$ms.="<td> $email </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Mobile</strong> </td>";
$ms.="<td> $phone </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Registration / Sponsorship Levels</strong> </td>";
$ms.="<td> $type2 </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Currency Code</strong> </td>";
$ms.="<td> $cc </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Amount Paid</strong> </td>";
$ms.="<td> $payment_amount </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Payment Status</strong> </td>";
$ms.="<td> Paid </td>";
$ms.="</tr>";

$ms.="<tr style='background: #eee;'>";
 $ms.="<td> <strong>Payment Mode</strong> </td>";
$ms.="<td> PayPal </td>";
$ms.="</tr>";


$ms.="</table>";

$ms .= "<br>";
$ms .= "<br>";

$ms .= "Regards";
$ms .= "<br>";
$ms .= "<br>";

$ms .= " 12th World Tamils Economic Conference";
$ms .= "<br>";
$ms .= "<br>";

$ms.="</body></html>";
mail($to,$subject,$ms,$headers,'-faaaa@abc.com');


$date1 = new DateTime("now", new DateTimeZone('America/New_York'));

$date	= $date1->format('Y-m-d H:i:s');

$sql2="UPDATE register SET status='1',payment_date='$date',cc='$cc',amount='$payment_amount',paypal_tx_id='$txn_id'  WHERE invoice='$item_number' AND status='0'";
$result2 = $con->query($sql2);

$anum	= $item_number;

$sql = "SELECT * FROM register where invoice='$item_number' AND status='1'";

$result = $con->query($sql);
while($row = $result->fetch_assoc()){
    
$fn	= $row['fn'];	//textbox name "txt_name"
		$ln	= $row['ln'];
		$email	= $row['email'];
		$phone	= $row['phone'];
		
		$paypal_id	= $row['paypal_tx_id'];

		$invoice	= $row['invoice'];
	$price_1	= $row['amount'];
	
	$sts	= $row['status'];
		
	$uid	= $row['uid'];
	$pw1	= $row['pw'];
	$pw = password_hash($pw1, 
          PASSWORD_DEFAULT);
}
	?>


<?php } ?>

<?php

$sql = "SELECT * FROM register where paypal_tx_id='$txn_id' AND status='1'";

$result = $con->query($sql);
while($row = $result->fetch_assoc()){
    

$fn	= $row['fn'];	//textbox name "txt_name"
		$ln	= $row['ln'];
		$email	= $row['email'];
		$phone	= $row['phone'];
		
		
		$paypal_tx_id	= $row['paypal_tx_id'];

		$invoice	= $row['invoice'];
	$price	= $row['amount'];
		
	$uid	= $row['uid'];
	$pw1	= $row['pw'];
	$pw = password_hash($pw1, 
          PASSWORD_DEFAULT);
}
?>
<!-- registration End-->
	
	
                    <!-- feature area -->
        <div class="feature-area fa-negative">
            <div class="container">

                <div class="feature-wrapper">
                    <div class="row g-4">
                         <div class="col-md-6 col-lg-3"></div>
                        <div class="col-md-6 col-lg-6">
                            <div class="feature-item wow fadeInUp" data-wow-delay=".25s" style="text-align:left">
                              
<?php if ($paypal_tx_id == $txn_id){ ?>
                                              <h4 class="feature-title">Payment Successful</h4>
                                
                                 <p><b>Amount Paid:</b> $ <?php echo $price_1; ?>  </p>
                                  <p><b>Payment ID:</b> <?php echo $paypal_id; ?></p>
                                   <p><b>Purpose:</b> Registration/Sponsorship - 12th World Tamils Economic Conference</p>
                                  <p><b>Status:</b> Completed</p>

       <a href="logout.php"  class="theme-btn theme-btn1 wow fadeInRight" style="margin:15px 0">Close</a> 
       
       <?php } ?>
                              
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
      
    </main>


    <!-- footer area -->
    <footer class="footer-area">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 align-self-center">
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