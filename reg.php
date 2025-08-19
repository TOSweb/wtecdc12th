<?php
include_once("config.php");
if(isset($_POST['submit'])) 
		{
        $fn= $_POST['fn'];
        $ln= $_POST['ln'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $type1= $_POST['type1'];
        $company= $_POST['company'];
        $amount= $_POST['amount'];
        $designation = $_POST['designation'];
        $invoice= rand();
        $status= '0';
        $query=mysqli_query($con,"insert into register(fn,ln,email,phone,company,designation,type1,paypal_tx_id,payment_date,cc,amount,invoice,status) values('$fn','$ln','$email','$phone','$company','$designation','$type1','','','','$amount','$invoice','$status')");
        $last_inserted_id= mysqli_insert_id($con);
        $_SESSION['uid'] = $last_inserted_id;
        
	    if($query)
	    {
	        
	        header("Location: register-pay.php");

		
	    }
	}

?>