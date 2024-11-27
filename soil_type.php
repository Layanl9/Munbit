<?php
include("conn.php");
$id = $_SESSION['id'];
$image_id = $_GET['image_id'];


$sql_image = "SELECT * FROM images WHERE id = $image_id";
$query_image = mysqli_query($conn,$sql_image);




foreach($query_image as $row_image)
{
  $status = $row_image['status'];
  $result = $row_image['result'];
  $details = $row_image['details'];

}

if($status == 0)
{
  $result = "processing";
  $details = "processing";
header("refresh:5");
}

$sql_recommendations  = "SELECT * FROM recommendations WHERE image_id = $image_id";
$query_recommendations = mysqli_query($conn,$sql_recommendations);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Soil Type </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
<style>

.soliType-setting{
  height: auto;
}

.title{
    color:#61513C;
    padding-bottom: 20px;
    position: relative;
}
.title::before{
    content: "";
    width: 6px;
    height: 40px;
    background-color: #BEE97B;
    position: absolute;
    left: -18px;
    top: 5px;
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


.content {
  line-height: 35px;
  padding: 0 20px;
}

.box-image {
  height: 350px;
  background-color: #3A2D0F;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 12px;
}

.box-image img {
  width: 170px;
}

.title-img {
  text-align: center;
  padding: 20px 0;
}

.box-plants{
  display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 320px;
      background-image: url("./images/bg-rectangle.png");
      background-size: 160px;
      background-position: center;
      background-repeat: no-repeat;

}


.box-plants img{
  width: 180x;
  border-bottom: 0px solid #BEE97B;
}

.taps {
  color: #3A2D0F !important;
  text-decoration: none !important;
  font-size: 18px !important;
  font-weight: 800 !important;
  transition: all .5s ;
}

.taps:hover{
  color: #BEE97B !important;
}

.layer-footer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 30px;
      position: relative;
    }
</style>

</head>

<body>



  <?php
  include("Navbar.php");
  ?>



<section class="soliType-setting">
  <div class="container">
      <nav aria-label="breadcrumb" class="pt-4 pb-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item "><a href="./home.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Determine your soil type</li>
        </ol>
      </nav>
    <div class="row " style="border-radius: 8px; background-color:#F8F7EA; padding:50px;">
      <!-- box text -->
      <div class="col-lg-8">
        <div class="box-text">
          <h1 class="title"> your soil type is </h1>
          <h3 class="content">
          <?= $result; ?>
          </h3>
          <p style="text-align: justify;">
          <?= $details; ?>
          </p>
        </div>
      </div>
      <!-- box image -->
      <div class="col-lg-4">
          <div class="box-image">
          <img class="move" src="./images//upload-1.png" alt=""  >
        </div>
        <h3 class="title-img"> <?= $result; ?> </h3>
      </div>
    </div>
    <!--  -->
    <div class="row pt-5">

 <!-- <div class="col-lg-3">
        <a href="soil_type.php?image_id=<?=$image_id;?>&type=fruits" class="p-5 taps">| ALL</a>
      </div> -->

      <div class="col-lg-3">
        <a href="soil_type.php?image_id=<?=$image_id;?>&type=fruits" class="p-5 taps">| Fruits & Vegetables</a>
      </div>

      <div class="col-lg-3">
        <a href="soil_type.php?image_id=<?=$image_id;?>&type=flowers" class="p-5 taps">| Flowers</a>
      </div>

      <div class="col-lg-3">
        <a href="soil_type.php?image_id=<?=$image_id;?>&type=trees" class="p-5 taps"> | Trees</a>
      </div>
    </div>

    <!--  -->
    <div class="row">
      <?php
        foreach($query_recommendations as $row_recommendations) {
          
          if (!isset($_GET['type'])) {
          $plant_id = $row_recommendations['plant_id'];
          $sql_plants = "SELECT * FROM plants WHERE id = $plant_id";
          $query_plants = mysqli_query($conn,$sql_plants);
        }
          if (isset($_GET['type'])) {
          $type = $_GET['type'];
          $plant_id = $row_recommendations['plant_id'];
          $sql_plants = "SELECT * FROM plants WHERE id = $plant_id AND type like '$type' ";
          $query_plants = mysqli_query($conn,$sql_plants);
          }
          

          foreach($query_plants as $row_plant){
        ?>  
      <div class="col-lg-3">
    <div class="box-plants" style="text-align: center;">
        <!-- Image Section -->
        <img src="./images/<?=$row_plant['image'];?>" alt="" style="width: 50%; height: 150px;  border-radius: 12px">

        <!-- Name Section -->
        <div class="plants-body p-4">
            <p class="card-text" >
                <?= $row_plant['name']; ?>
            </p>
        </div>
    </div>
</div>
      <?php
      }}
      ?>

    </div>
  </div>
</section>
<!-- footer -->
<?php
  include("Footer.php");
  ?>
  <div class="layer"></div>
</body>


<!-- scroll reveal  -->
<script src="https://unpkg.com/scrollreveal"></script>

<script>

// scroll reveal
ScrollReveal({
    distance: "90px",
    duration: 2000,
    delay: 200,
    reset: true ,
});
// 
ScrollReveal().reveal('.breadcrumb,.content,.title,.title-img,.bg-banner' , { origin: "top" });
ScrollReveal().reveal('.breadcrumb,.title,.plants-body', { origin: "left" });
ScrollReveal().reveal('.title,.breadcrumb-item,.box-plants', { origin: "right" });
ScrollReveal().reveal('.box-text,.box-image,.move,', { origin: "bottom" });
</script>

</html>