<?php

$conn = new mysqli('localhost','root','','studyabroad');
if(!$conn){
    echo 'not connect';
}

if($_GET['order_cus_email']){


    $cstmr_email = $_GET['order_cus_email'];
    $status = "Done";
    $action = "Delivered";

        $sql3 =   "UPDATE admin_order_info_all 
        SET status='$status', Deliver='$action' WHERE cus_email='$cstmr_email' ";
        $result3 = $conn->query($sql3);

        $sql4 =   "UPDATE order_details_info 
        SET status='$status' WHERE cus_email='$cstmr_email' ";
        $result4 = $conn->query($sql4);

   if($result3 == true){
    if($result4 == true){
        echo "<script>window.location.href ='allOrder.php';</script> ";
    }
   
    
   }else{
    echo "error";
   }


}





?>