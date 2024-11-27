<?php
include("conn.php");
$id = $_SESSION['id'];
$sql = "UPDATE users SET image = null WHERE id = $id";
$query = mysqli_query($conn,$sql);
header("location:update_profile.php");
?>