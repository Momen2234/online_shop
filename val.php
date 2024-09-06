<?php
include("db.php");
$id =$_GET['id'];
$up = mysqli_query($con,"SELECT * FROM  product WHERE id =$id");
$data= mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد الشراء </title>
    <style>
        input{
            display: none;
        }
        .main{
            width: 30%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_cart.php" method="post">
                <h2>هل تريد تأكيد الشراء؟</h2>
                <input type="text" name="id" value="<?php echo $data['id']?>">
                <input type="text" name="name" value="<?php echo $data['name']?>">
                <input type="text" name="price" value="<?php echo $data['price']?>">
                <button name="add" type="submit" class="btn btn-warning">تأكيد الاضافة</button>
                <br>
                <a href="shop.php">الرجوع لصفحة المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>