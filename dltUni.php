<?php

$conn = new mysqli('localhost','root','','studyabroad');
if(!$conn){
    echo 'not connect';
}

if($_GET['INFO_id']){


    $id = $_GET['INFO_id'];
    
        $sql ="DELETE FROM abroad WHERE ID = '$id'";

   $result = $conn->query($sql);

   if($result == true){
   echo "<script>window.location.href ='addAbrod.php';</script> ";
    
   }else{
    echo "error";
   }


}

?>
