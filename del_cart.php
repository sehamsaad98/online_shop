<?php 
include('config.php');
$ID =$_GET['id'];
echo $ID;
mysqli_query($con , "DELETE FROM addcart WHERE id=$ID");
header('location:cart.php');

?>