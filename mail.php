<?php
if(isset($_POST['submit'])) 
		{
       $name= $_POST['name'];

       $email= $_POST['email'];
        $phone= $_POST['phone'];
         $msg= $_POST['msg'];
    
$subject="Web Enquiry";

$to = "smdswamy18@gmail.com,Contact@12thwtecdc.com";
$from=$email;

$message = <<<EOF
<html>
  <body bgcolor="#DCEEFC">
   
   <center>
        <table border="1" align="center" cellpadding="4" cellspacing="4">
  <tr>
    <td align="right" nowrap="nowrap"> Name</td>
    <td>:</td>
    <td width="374">$name</td>
  </tr>

  <tr>
    <td align="right" nowrap="nowrap">Email</td>
    <td>:</td>
    <td width="374">$email</td>
  </tr>

   <tr>
    <td align="right" nowrap="nowrap">Phone</td>
    <td>:</td>
    <td width="374">$phone</td>
  </tr>
   <tr>
    <td align="right" nowrap="nowrap">Message</td>
    <td>:</td>
    <td width="374">$msg</td>
  </tr>

</table>
   </center>
  </body>
</html>
EOF;
   //end of message
    $headers  = "From:youremail@yoursite.com\r\n";
    $headers .= "Content-type: text/html\r\n";
	
  mail($to, $subject, $message, "From: $from \nContent-Type: text/html; charset=iso-8859-1");
  
  echo "<script>
  alert('Mail Sent Successfully');
window.location.href='contact.html';  
</script>";

		}

?>