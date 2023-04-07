<?php
include('config.php');
$ID= $_GET['id'];
$up = mysqli_query($con, "SELECT *FROM  products WHERE id =$ID");
$data= mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <style>
        a{
    text-decoration: none;
    font-size: 20px;
    color:tomato;
    font-weight: bold;
}
input{
    display: none;
}
.main{
    padding: 40px;
    box-shadow: 1px 1px 10px silver;
    margin-top: 50px;
    width: 6   00px;
}
    </style>
</head>
<body>
    <center>
     <div class="main">
        <form action="insert_cart.php" method="post">
            <h2>هل فعلا تريد شراء المنتج</h2>
            <input type="text" name="id" value="<?php echo $data["id"]?>">
            <input type="text" name="name"  value="<?php echo $data["name"]?>">
            <input type="text" name="price"  value="<?php echo $data["price"]?>">
            <button name="addtocart" type="submit" class="btn btn-danger">تأكيد اضافة المنتج للعربة</button>
              <br>
              <a href="shop.php">الرجوع الى صفحة المنتجات</a>
        </form>
    </div>
    </center>
</body>
</html>