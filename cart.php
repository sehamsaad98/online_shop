<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my cart</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <style>
        h3{
           font-family: 'cairo' , sans-serif;
           font-weight: bold;

        }
        main{
            width: 50%;
            margin-top: 40px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
            
        }
        thead{
            background-color: #1E90FF;
            color:white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: tomato;
        }
    </style>
</head>
<body> 
    <center><h3> منتجاتك المحجوزة</h3></center>
    <?php
     include('config.php');
    $result=mysqli_query($con , "SELECT * FROM addcart ");
    while($row = mysqli_fetch_array($result)){
        // echo "<pre>";
        // print_r($row) ;
        // echo "</pre>";
        echo"
        <center>
        
        <main>
       
            <table class='table'>
                <thead >
                    <tr>
                        <th scope='col'> product name</th>
                        <th scope='col'>product price</th>
                        <th scope='col'>delete product</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_cart.php? id=$row[id]'  class='btn btn-danger'>delete</a> </td>

                    </tr>
                </tbody>
            </table>
        </main>
    </center>";
    }

    
    ?>
    <center>
        <a href="shop.php">الرجوع الى صفحة المنتجات</a>
    </center>
</body>
</html>