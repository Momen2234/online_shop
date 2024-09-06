<?php
include("db.php");
$id=$_GET["id"];
mysqli_query($con,"DELETE FROM cart WHERE id = $id");
header("location: cart.php");
?>