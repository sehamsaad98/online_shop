<?php
include('config.php');
if(isset($_POST['upload'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    // echo  $NAME;
    // echo    $PRICE;
    
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $insert="INSERT INTO products(name , price , image ) VALUES ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location,"images/".$image_name)){
        // alert doesn't work
        echo "<script>alert('لقد تم رفع الصورة بنجاح');window.location.href='index.php';</script>";
    
       
    }else{
        echo "<script>alert('حدث خطأ لم يتم رفع المنتج');window.location.href='index.php';</script>";

    }
    // header('location: index.php'); 
}


?>