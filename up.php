<?php
include('config.php');
if(isset($_POST['update'])){
    $NAME=$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    $ID=$_POST['id'];
    // echo  $NAME;
    // echo    $PRICE;
    
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $update="UPDATE products SET name='$NAME', price ='$PRICE', image='$image_up' WHERE id = $ID";
    mysqli_query($con,$update);
    if(move_uploaded_file($image_location,"images/".$image_name)){
        // alert doesn't work
        echo "<script>alert('لقد تم تحديث الصورة بنجاح')</script>";
        echo" <center>لقد تم رفع الصورة بنجا</center>";
    }else{
        echo "<script>alert('حدث خطأ لم يتم تحديث المنتج')</script>";

    }
    header('location:products.php');
    
}


?>