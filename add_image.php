<?php
include("conn.php");
$id = $_SESSION['id'];


if(isset($_POST['upload_btn']))
{
  $path=$_FILES['image']['name'];

  if (move_uploaded_file($_FILES['image']['tmp_name'], "images/".$path)) {
  $sql = "INSERT INTO `images`(`path`, `status`,`user_id`) VALUES ('$path',0,$id) ";
  $query = mysqli_query($conn,$sql);
  $image_id = mysqli_insert_id($conn);
header("location:soil_type.php?image_id=$image_id");
}
  else
  {
    echo "<script>alert('image doesnot added successfully')</script>";

  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Add Image </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
<style>
.add-img-setting{
  height: auto;
}

.upload-soil{
  background:#3A2D0F;
  padding: 30px 50px;
  height: auto;
  border-radius:18px !important;
}

.upload-soil-title{
  position: relative;
  color:#F8F7EA;
}
.upload-soil-title::before{
    content: "";
    width: 6px;
    height: 37px;
    background-color: #BEE97B;
    position: absolute;
    left: -18px;
    top: 5px;
}
.content-upload-soil{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    width: 100%;
    gap: 50px;
}
.content-upload-soil .up-1{
  width: 200px;
  overflow:hidden;
}
.content-upload-soil .up-2{
  width: 50px;
}
.uplaod-soil-text {
  color: #F8F7EA;
}
.uplaod-soil-text  span {
  font-weight:bold;
}
.upload-soil-btn{
    background-color: #ffffffff;
    width: 25%;
    font-size:25px;
    color:#3A2D0F;
    border-radius:18px;
    padding: 10px;
}

.layer-footer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 30px;
      position: relative;
    }

.btn-warning{
  position: relative;
  padding: 11px 16px;
  font-size: 15px;
  line-height: 1.5;
  border-radius: 3px;
  color: #fff;
  background-color: #416D19;
  border: 0;
  transition: 0.2s;
  overflow: hidden; 
}

/* .btn-warning input[type = "file"]{
  cursor: pointer;
  position: absolute;
  left: 0;
  top: 0;
  transform: scale(3);
  opacity: 4;
} */

.btn-warning:hover{
  background-color: #416D19;
}

li a {
  text-decoration: none;
  color: #3A2D0F;
  transition: all ease-in .5s;
}

li a:hover{
  text-decoration: underline;
  color: #BEE97B;
}

input[type="file"] {
    background-color: #3A2D0F;
    border: 1px solid #3A2D0F;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    color: white;
    margin-left: 30%;
}

</style>

</head>

<body>

  <?php
  include("Navbar.php");
  ?> 


<section   class="add-img-setting" > 
    <!-- <input type="checkbox" id="check" style="width: 100%;"> -->
      <div class="container">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 m-5">
          <li class="breadcrumb-item "><a href="./home.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Determine your soil type</li>
        </ol>
      </nav>
      <div class="row"> 

        <div class="col-lg-12 pt-2 mt-5">
          <div class="upload-soil">
            <h2 class="upload-soil-title">Determaine Your Soil Type</h2>
            <div class="content-upload-soil">
              <img class="up-1" src="./images/upload-1.png" alt="">
              <img class="up-2" src="./images/upload-2.png" alt="">
              <p class="uplaod-soil-text">Upload Your <span> Soli Image </span>  here </p>
              <div class="upload">
                <form action="add_image.php" method="post" enctype="multipart/form-data" style="width: 100%;">
                  <i class="lni lni-upload"></i>
                  <input  name="image" id="image" type="file"  accept="image/*" required>
                </div>
              </div>
            </div> 
          </div>


                  <div  style="border-radius:18px;" class="text-center pt-4">
                    <button  class = "btn-warning" name="upload_btn" type="submit">
                    <span style="color:#fff; padding:4px; ">Upload Image</span>
                  </button>
                  </div>

        </form>
      </div>
      </div>
  </section>
  
  <!-- footer -->
  <?php
  include("Footer.php");
  ?>
  <div class="layer"></div>
</body>

</html>