<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlineShop</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
<style>
input{
    width: 60%;
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
    font-family: 'Cairo', sans-serif;
    margin-bottom: 10px;

}
a{
    text-decoration: none;
    font-size: 20px;
    color:tomato;
    font-weight: bold;
}
</style>
</head>
<body>
   <center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>موقع تسويقى اونلاين</h2>
            <img src="shop-building-colorful-isolated-white-33822015.jpg" alt="logo" width="450px">
            <input type="text" name="name">
            <br>
            <input type="text" name="price">
            <br>
            <input type="file" id="file" name="image" style="display:none">
            <label for="file">upload image </label>
            <button name="upload" > رفع المنتج
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