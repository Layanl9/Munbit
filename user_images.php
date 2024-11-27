<?php
include("conn.php");
$id = $_SESSION['id'];

$sql = "SELECT * FROM `images` WHERE user_id = $id ";
$query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Add Image </title>
  <link rel="stylesheet" href="style.css">
  <style>
    .container {
  max-width: 50%;
  width: 100%;
  background: #fff;
  border-radius: 7px;
  height: 50vh;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  margin: auto;
  margin-top: 20px;

}

td {
  text-align: center;
}
th {
  text-align: center;
}
    </style>
</head>

<body>
  <?php
  include("header.php");
  ?>
<table style="width: 100%;background: #fff;">
  <tr>
<th>image</th>
<th>result</th>
</tr>
<?php
foreach($query as $row){
?>
<tr>
<td><img src="images/<?=$row['path'];?>" ></td>
<td><?= $row['result']; ?></td>
</tr>
<?php
}
?>


</table>
</body>

</html>