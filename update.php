<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        input{
    margin-bottom: 10px;
    width: 60%;
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
}
    </style>    
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <?php 
    include('config.php');
    $ID= $_GET['id'];

    $update=mysqli_query($con,"SELECT * FROM products WHERE id=$ID");
    $data = mysqli_fetch_array($update );
    ?>
   <center>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>تعديل المنتج</h2>
            <input type="text" name="id" value="<?php echo $data['id']?>">
            <br>
            <input type="text" name="name" value="<?php echo $data['name']?>">
            <br>
            <input type="text" name="price" value="<?php echo $data['price']?>">
            <br>
            <input type="file" id="file" name="image" style="display:none">
            <label for="file">تحديث صورة المنتج </label>
            <button name="update" type="submit"> تعديل النتج 
            </button>
            <br>
            <a href="products.php"> عرض كل المتجات</a>
        </form>
    </div>
    <p> developed by seham </p>
   </center> 


<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/caption.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>