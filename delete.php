<?php
include("db.php");

$id = $_GET["id"];
$query="DELETE FROM product WHERE id =$id";
$result = mysqli_query($con, $query);

header("location:products.php");

?>