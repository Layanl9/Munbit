<?php
include("conn.php");
$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> About </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
<style>
.suppliers-setting{
    height: 100vh;
}

.suppliers-title{
      text-align:center;
}

.cards-suppliers{
  height: 470px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 50px;
      padding: 0px 30px;
      text-align: center;
      border-radius: 18px;
      border: 2px solid #224D2C;
      flex-wrap: wrap;
}

.card-title{
    width: 100%;
    display: flex;
    gap: 20px;
    align-items: center;
}
.card-heading{}
.visit-link{
    color: #224D2C;
    width: 100%;
    padding: 5px;
    background: #0c513f45;
    border-radius: 18px;
}
a {
      text-decoration: none !important;
}

</style>
</head>

<body>

  <?php
  include("Navbar.php");
  ?>
  <section class="suppliers-setting">
    
  <div class="container">
      <div class="suppliers-title pt-5 mb-5">
        <h1>Our Suppliers</h1>
      </div>
    <!-- row of element   -->
      <div class="row">
        <!-- box 1 -->
        <div class="col-lg-4 col-md-12 col-sm-12 pt-5">
          <div class="cards-suppliers">
            <div class="">
              <img src="images/suppliers/agri.png" style="width: 100%;height:200px; ">
            </div>
            <div class="card-title">
            <h3 class="card-heading"> Agri </h3>
            <a class="visit-link"  href="https://agri.com.sa/ar/" target="_blank">visit</a>
            </div>
          </div>
        </div>
        <!-- box 2 -->
              <div class="col-lg-4 col-md-12 col-sm-12 pt-5">
          <div class="cards-suppliers">
            <img src="images/suppliers/nabataty.png" style="width: 100%;height:200px; ">
            <div class="card-title">
            <h3 class="card-heading"> Nabataty </h3>
            <a class="visit-link"  href="https://agri.com.sa/ar/" target="_blank">visit</a>
            </div>
          </div>
        </div>
        <!-- box 3 -->
        <div class="col-lg-4 col-md-12 col-sm-12 pt-5">
          <div class="cards-suppliers">
            <img src="images/suppliers/kayan.png" style="width: 100%;height:200px; ">
            <div class="card-title">
            <h3 class="card-heading"> Kayan </h3>
            <a class="visit-link"  href="https://agri.com.sa/ar/" target="_blank">visit</a>
            </div>
          </div>
        </div>
    </div>
  </div>

  </section>
</body>

</html>