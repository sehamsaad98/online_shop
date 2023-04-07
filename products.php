<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlineShop</title>
    <style>
.card{
    float: right;
    margin-top: 20px;
    margin-left: 10px;
    margin-right: 10PX;
}
.card img{
    width: 100%;
    height: 200px;
}

main{
    width: 60%;
}  </style>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<center>
    <h3 class="">لوحة تحكم الادمن</h3>
</center>
<?php
include('config.php');
$result=mysqli_query($con,"SELECT * FROM  products ");
// get all data in array
if($result){
while($row = mysqli_fetch_array($result)){
echo"<center>
<main>
<div class='card' style='width:18rem;'>
<img src='$row[image]' class='card-img-top' alt=''>
<div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
     <p class='card-text'>$row[price]</p>
      <a href='delete.php? id=$row[id]'class='btn btn-danger'>حذف منتج</a>
      <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>

    </div>

 </div>

</main>

</center>";
}
}
?>
<main>

</main>


<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/caption.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>