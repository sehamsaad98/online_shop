<?php
include('config.php');
if(isset($_POST['addtocart'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
 $insert="INSERT INTO addcart (name,price) VALUES ('$NAME', '$PRICE') ";
//  connet to db then insert data
// print_r($insert);
 mysqli_query($con , $insert);
 header('location:cart.php');
}




?>