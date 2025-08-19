<?php  
include "config.php";
$output = '';
$dollor ='$';
$status ='Completed';
 $query = "SELECT * FROM register where status='1'";
 $result = mysqli_query($con, $query);
 $count = 0;
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
      $count+=1;
   $output .= '
    <tr>  
                         <td>'.$count.'</td>  
                         <td>'.$row["payment_date"].'</td> 
                          <td>'.$row["fn"].'</td>
                           <td>'.$row["ln"].'</td>
                            <td>'.$row["email"].'</td>
                             <td>'.$row["phone"].'</td>
                              <td>'.$row["company"].'</td>
                               <td>'.$row["designation"].'</td>
                                <td>'.$row["type1"].'</td>
                                 <td>'.$row["paypal_tx_id"].'</td>
                                  <td>'.$dollor.' '.$row["amount"].'</td>
                                   <td>'.$status.'</td>  

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Register/Sponsorship_Details.xls');
  echo $output;
 }
?>