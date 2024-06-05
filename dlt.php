<?php

$conn = new mysqli('localhost','root','','studyabroad');
if(!$conn){
    echo 'not connect';
}

if($_GET['product_id']){


    $id = $_GET['product_id'];
    
    $sql ="DELETE FROM product WHERE id = '$id'";

   $result = $conn->query($sql);

   if($result == true){
   echo "<script>window.location.href ='addProduct.php';</script> ";
    
   }else{
    echo "error";
   }


}




?>