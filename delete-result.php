<?php
include("conn.php");
$id = $_GET['id'];
$sql = "DELETE FROM images WHERE id = $id";
$query = mysqli_query($conn,$sql);
header("location:planting_records.php");
?>