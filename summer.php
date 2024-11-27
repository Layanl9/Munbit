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
  <title> Summer </title>

  <style>
    .summer-setting {
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
      .summer-setting {
        height: auto;
      }

      .card-info {
        width: 80%;
      }
    }

    @media(min-width:768px)and (max-width:992px) {

      .summer-setting {
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

    @media(max-width:768px) {
      .summer-setting {
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

  <section class="summer-setting pt-5 mt-5">
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
            <a class="nav-link" style="color:#BEE97B;" href="./autumn.php">| Autumn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#000;" href="./summer.php">| Summer</a>
          </li>
        </ul>
      </div>
      <!-- row of element -->
      <div class="row">
        <div class="col-lg-12 pt-5">
            <swiper-slide><img src="./images/summer.png" alt=""></swiper-slide>
        </div>
      </div>
      <!--  -->
      <div class="row pt-5 mb-5 ">
        <!-- box of texts -->
        <div class="col-lg-8 col-md-12 col-sm-12  p-3">
          <div class="card-text">
            <h1 class="title">SUMMER</h1>
            <p class="text ms-4">
            Summer in Saudi Arabia, from June to August, is a season of intense heat and arid conditions, Despite these challenges, the agricultural sector continues to thrive through innovative techniques and efficient resource management. Regions such as Tabuk, Najran, and Hail play significant roles in maintaining agricultural productivity during this demanding season.
            In <span style="color:#BEE97B;">Tabuk</span>, summer agriculture focuses on crops like <span style="color:#BEE97B;">grapes and watermelons</span>, which are well-suited to the region's dry climate. Tabuk is also known for its pioneering use of modern farming technologies, including greenhouses and advanced irrigation systems, which help sustain productivity even in extreme heat. Similarly,<span style="color:#BEE97B;">Najran</span> benefits from its fertile valleys, where farmers cultivate tropical fruits such as <span style="color:#BEE97B;">mangoes and figs</span>, along with seasonal vegetables, using water-efficient methods like drip irrigation.
            <span style="color:#BEE97B;">Hail</span>, a region with a strong agricultural tradition, focuses on producing grains and fruits during the summer. Despite the arid conditions, the area’s farms utilize innovative practices, including solar-powered irrigation and soil conditioning, to maintain crop yields. Hail is particularly known for its melon production, which peaks during the summer months, supplying local and regional markets.
            Summer in Saudi Arabia is a testament to the resilience and adaptability of the agricultural sector. Regions like Tabuk, Najran, and Hail exemplify how innovative practices and resourceful solutions can sustain production, contributing to the nation’s food security and its vision of sustainable development.
            </p>
          </div>
        </div>
        <!-- box of information -->
        <div class="col-lg-4 col-md-12 col-sm-12  p-4">
          <div class="card-info">
            <div class="title-top">
              <h3>35°C-50°C</h3>
              <img src="./images/info-1.png" alt="">
            </div>

            <div class="title-center">
              <h3>10-25 km/h</h3>
              <img src="./images/info-2.png" alt="">
            </div>

            <div class="title-text">
              <h6>Summer in Saudi Arabia begins in early June and lasts until September, with temperatures varying significantly across the country. The nation's vast and diverse geography results in a range of summer climates across its regions.</h6>
            </div>
          </div>
        </div>
        <!--  -->
              <!--  -->
              <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/watermelon.png" alt="">
              <h5 class="title-img">
              watermelon
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/mango.png" alt="" style="width: 130px;" >
              <h5 class="title-img" >
                Mango
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/figs.png" alt="">
              <h5 class="title-img">
              Figs
              </h5>
            </div>
          </div>
          <p>add touches of color and life to the garden when most other plants are dormant with summer-blooming flowers such as </p>
          <!--  -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-1.png" alt="">
              <h5 class="title-img">
                sunflowers
              </h5>
            </div>
          </div> 
          <!-- -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-2.png" alt="">
              <h5 class="title-img">
                zinnias
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-3.png" alt="">
              <h5 class="title-img">
                marigolds
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-4.png" alt="">
              <h5 class="title-img">
                petunias
              </h5>
            </div>
          </div>
          <!-- text  -->
          <p>Additionally, summer is a great time for cultivating heat-loving vegetables such as</p>
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
              <img src="./images/Peppers.png" alt="">
              <h5 class="title-img">
                Peppers
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-7.png" alt="">
              <h5 class="title-img">
                Cucumbers
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/sum-8.png" alt="">
              <h5 class="title-img">
                Squash
              </h5>
            </div>
          </div>
          <!--  -->
          <p>These plants not only thrive in the summer's warmth but also produce bountiful harvests, providing fresh and flavorful produce for your table throughout the season. Embrace the summer sun and bring life to your garden with these vibrant and productive plant choices.</p>
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