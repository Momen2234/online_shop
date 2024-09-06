<?php
include("db.php");
if(isset($_POST["update"])){
    $id=$_POST["id"];
    $name= $_POST["name"];
    $price= $_POST["price"];
    $image= $_FILES["image"];
    $image_location=$_FILES["image"]["tmp_name"];
    $image_name=$_FILES["image"]["name"];
    $image_up= "images/". $image_name;
    $update = " UPDATE `product` SET `id`='$id',`name`='$name',`price`='$price',`image`='$image_up' WHERE id=$id";
    mysqli_query($con, $update);
    if (move_uploaded_file($image_location,"images/". $image_name)) {
        echo"<script>alert('تم تحديث المنتج بنجاح')</script>";
    }else {
        echo"<script>alert('حدثت مشكلة')</script>";
    }
    header("location:products.php");

}


?>