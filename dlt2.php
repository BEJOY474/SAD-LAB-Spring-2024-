<?php 

$conn = new mysqli('localhost','root','','studyabroad');
if(!$conn){
    echo 'not connect';
}

if($_GET['dlt_pro_id']){


    $dl_id = $_GET['dlt_pro_id'];

         $sql6 = "SELECT * FROM cart WHERE sl = $dl_id ";
         $result = $conn->query($sql6);
  

             while ( $data = $result->fetch_assoc()) {
              
                $product_id = $data['product_id'];
                $product_quantity = $data['product_quantity'];
             }

             $sql7 = "SELECT * FROM product WHERE id = $product_id ";
            $result7 = $conn->query($sql7);
  

             while ( $data = $result7->fetch_assoc()) {
              
               
                $stock_product = $data['stock_product'];
             }

             $new_stock_product =    $stock_product +  $product_quantity;

    $sql =   "UPDATE product 
    SET stock_product='$new_stock_product' WHERE id ='$product_id' ";

   $result = $conn->query($sql);
    
    $sql ="DELETE FROM cart WHERE sl = '$dl_id'";

   $result = $conn->query($sql);

   if($result == true){
   echo "<script>window.location.href ='cart.php';</script> ";
    
   }else{
    echo "error";
   }


}
?>