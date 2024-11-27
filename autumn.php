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
  <title> Autumn </title>

  <style>
    .autumn-setting {
      height: auto;
      padding-bottom: 2rem;
    }

    swiper-container {
      width: 100%;
      height: 200px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      background-size: contain;
      border-radius: 16px;
    }


    /* .swiper-pagination-bullet-active{
  background: #BEE97B !important;
  color:#bee97b;
}
.swiper-pagination-bullet{} */

    /*  */
    .card-text {
      text-align: start;
      position: relative;
    }

    .card-text .title {
      padding: 5px 10px;
      color: #3A2D0F;
    }

    .card-text .title::before {
      content: "";
      height: 35px;
      width: 3px;
      background-color: #BEE97B;
      position: absolute;
      top: 14px;
      left: 0;
    }

    .card-text .text {
      color: #3A2D0F;
    }

    .cards-img {
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

    .cards-img img {
      width: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .cards-img .title-img {
      margin: 20px 5px;
    }


    .card-info {
      width: 70%;
      border: 1px solid #BEE97B;
      padding: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      border-radius: 18px;
      height: 350px;
      position: relative;
      top: -5px;
      left: 70px;
    }

    .title-top {
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }

    .title-center {
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;
      gap: 20px;
    }

    .title-img {
      font-size: 16px;
      text-align: center;
    }


    .layer-footer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 30px;
      position: relative;
    }


    li a {
      text-decoration: none;
      color: #3A2D0F;
      transition: all ease-in .5s;
    }

    li a:hover {
      text-decoration: underline;
      color: #BEE97B;
    }

    /* التنسيق الخاص بـ التوافق مع الشاشات */

    @media(max-width:1399px) {
      .autumn-setting {
        height: auto;
      }

      .card-info {
        width: 80%;
      }
    }

    @media(min-width:768px)and (max-width:992px) {
      .autumn-setting {
        height: auto;
        padding-bottom: 2rem;
      }

      .row-revarec {
        flex-direction: column-reverse;
      }

      .card-info {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 18px;
        height: 270px;
        position: relative;
        top: 0;
        left: 0;
        z-index: 232332;
        backdrop-filter: blur(5px);
      }
    }

    @media(max-width:768px) {
      .autumn-setting {
        height: auto;
        padding-bottom: 2rem;
      }

      .card-info {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 18px;
        height: 270px;
        position: relative;
        top: 0;
        left: 0;
        z-index: 232332;
        backdrop-filter: blur(5px);
      }
    }



    @media(max-width:568px) {}
  </style>
</head>

<body>

  <?php
  include("Navbar.php");
  ?>

  <section class="autumn-setting pt-5 mt-5">
    <div class="container">
      <div class="link-title pt-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="./home.php">Home</a></li>
            <li class="breadcrumb-item"><a href="./home.php#our-Agricultural-setting">Agricultural recommendation</a></li>
            <li class="breadcrumb-item active" aria-current="page">Plants in the seasons</li>
          </ol>
        </nav>
        <!--  -->

        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" style="color:#BEE97B;" href="./spring.php">| Spring</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#BEE97B;" href="winter.php">| Winter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#000;" href="./autumn.php">| Autumn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#BEE97B;" href="./summer.php">| Summer</a>
          </li>
        </ul>
      </div>
      <!-- row of element -->
      <div class="row">
        <div class="col-lg-12 pt-5">
            <swiper-slide><img src="./images/autumn.png" alt=""></swiper-slide>
        </div>
      </div>
      <!--  -->
      <div class="row pt-1 mb-3 ">
        <!-- box of texts -->
        <div class="col-lg-8 col-md-12 col-sm-12  p-3">
          <div class="card-text">
            <h1 class="title">AUTUMN</h1>
            <p class="text ms-4">
            Autumn in Saudi Arabia, lasting from September to November, is a significant season for agriculture, as the transition to cooler temperatures and improved soil conditions provides excellent opportunities for cultivating various crops. The country's key agricultural regions, such as <span style="color:#BEE97B;">Al Jouf</span>, <span style="color:#BEE97B;">Qassim</span>, and <span style="color:#BEE97B;">Tabuk</span>, take advantage of this period to produce high-quality fruits, vegetables, and grains.<span style="color:#BEE97B;">Al Jouf</span>, renowned for its <span style="color:#BEE97B;">Olive</span> farms, focuses on preparing olive trees for the next fruiting cycle during autumn, diversifying the region’s agricultural output. In <span style="color:#BEE97B;">Qassim</span>, autumn supports the continued harvest of late-season dates and the planting of vegetables like <span style="color:#BEE97B;">tomatoes</span>, <span style="color:#BEE97B;">cucumbers</span>, and <span style="color:#BEE97B;">onions</span>. Citrus fruits, including <span style="color:#BEE97B;">oranges</span> and <span style="color:#BEE97B;">lemons</span>, thrive in the region’s favorable autumn climate, supported by advanced irrigation systems that ensure consistent growth and quality. Tabuk benefits from its moderate autumn climate, making it an ideal time for planting <span style="color:#BEE97B;">potatoes</span>, <span style="color:#BEE97B;">onions</span>, and <span style="color:#BEE97B;">garlic</span>. The region also sees the harvest of <span style="color:#BEE97B;">grapes</span> and <span style="color:#BEE97B;">apples</span> in early autumn, while preparations for winter wheat planting begin, taking full advantage of the season’s conditions.  
            Autumn in these regions highlights the strategic cultivation of crops tailored to each area's unique climate and soil. With the government’s continued emphasis on sustainable farming practices and water-efficient technologies, agricultural productivity during autumn remains robust, ensuring a steady supply of fresh, locally-grown produce for markets.  
            </p>
          </div>
        </div>
        <!-- box of information -->
        <div class="col-lg-4 col-md-12 col-sm-12  p-4">
          <div class="card-info">
            <div class="title-top">
              <h3>25°C-40°C</h3>
              <img src="./images/info-1.png" alt="">
            </div>

            <div class="title-center">
              <h3>10-20 km/h</h3>
              <img src="./images/info-2.png" alt="">
            </div>

            <div class="title-text">
              <h6>Autumn in Saudi Arabia, from late August to November, brings gradually cooling temperatures across its diverse landscapes. The varied geography creates unique climates in each region, shaping agricultural activities and the natural environment.</h6>
            </div>
          </div>
        </div>
        <!--  -->
        </div>
        <!--  -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/onion 2.png" alt="" >
              <h5 class="title-img">
              Onion
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-5.png" alt="">
              <h5 class="title-img">
              Tomatoes
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/lemon 2.png" alt="">
              <h5 class="title-img">
              Lemon
              </h5>
            </div>
          </div>
          <!-- text  -->
          <p> add touches of color and life to the garden when most other plants are dormant with autumn-blooming flowers such as </p>
          <!--  -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-1.png" alt="">
              <h5 class="title-img">
                chrysanthemums
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-2.png" alt="">
              <h5 class="title-img">
                pansy
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-3.png" alt="">
              <h5 class="title-img">
                ornamental grass
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-4.png" alt="">
              <h5 class="title-img">
                grass
              </h5>
            </div>
          </div>
          <!-- text  -->
          <p>For vegetable ,crops like </p>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-5.png" alt="">
              <h5 class="title-img">
                Kale
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-6.png" alt="">
              <h5 class="title-img">
                Lettuce
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/autumn-7.png" alt="">
              <h5 class="title-img">
                Brussels sprouts
              </h5>
            </div>
          </div>
          <!--  -->
          <p>
            These plants not only add color and texture to your garden but also withstand the cooler temperatures characteristic of the fall months, ensuring a flourishing garden well into the season.
          </p>
        </div>

      </div>
  </section>

  <!-- footer -->
  <?php
  include("Footer.php");
  ?>
  <div class="layer"></div>


  <!-- scroll reveal  -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="./main.js"></script>
</body>

</html>