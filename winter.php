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
  <title> Winter </title>

  <style>
    .winter-setting {
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
      .winter-setting {
        height: auto;
      }

      .card-info {
        width: 80%;
      }
    }

    @media(min-width:768px)and (max-width:992px) {
      .winter-setting {
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
      .winter-setting {
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

<body style="background:white">

  <?php
  include("Navbar.php");
  ?>

  <section class="winter-setting pt-5 mt-5">
    <div class="container">
      <div class="link-title pt-3">
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
            <a class="nav-link" style="color:#000;" href="winter.php">| Winter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#BEE97B;" href="./autumn.php">| Autumn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#BEE97B;" href="./summer.php">| Summer</a>
          </li>
        </ul>
      </div>
      <!-- row of element -->
      <div class="row">
        <div class="col-lg-12 pt-5">

            <swiper-slide><img src="./images/winterr.png" alt=""></swiper-slide>

          
        </div>
      </div>
      <!--  -->
      <div class="row  ">
        <!-- box of texts -->
        <div class="col-lg-8 col-md-12 col-sm-12  p-3">
          <div class="card-text">
            <h1 class="title">WINTER</h1>
            <p class="text ms-4"> 
           Winter in Saudi Arabia lasting from December to Februarymarks a significant season for agriculture,
           as the cooler temperatures and milder weather provide optimal conditions for cultivating a variety of crops. 
           The country's agricultural regions, such Al Jouf, Qassim,and Asir, thrive during this time, producing high-quality fruits,
           vegetables, and grains.<span style="color:#BEE97B;">Al Jouf</span> , for instance, is renowned for its <span style="color:#BEE97B;">Olive farms</span> olive farms, with winter being a crucial period for olive harvesting and oil production. Similarly, <span style="color:#BEE97B;">Qassim </span>sees a robust production of<span style="color:#BEE97B;"> dates</span>, <span style="color: #BEE97B;"> citrus fruits</span>, and vegetables, supported by the favorable winter climate and advanced irrigation systems.    
           Winter also brings seasonal rains, particularly in the southwestern highlands, replenishing water sources and nurturing the soil. These rains are vital for the growth of forage crops used to sustain livestock, which is a significant component of Saudi Arabia's agricultural economy. The government’s initiatives in promoting sustainable farming practices, coupled with advancements in water-efficient technologies, have further boosted agricultural productivity during the winter months.
           This season is a vital period for agricultural markets, as fresh, locally-grown produce becomes abundant, supporting the country's food security goals. Winter in Saudi Arabia not only rejuvenates the land but also underscores the importance of agriculture in the nation’s ongoing journey toward sustainability and self-sufficiency.
            </p>
          </div>
        </div>
        <!-- box of information -->
        <div class="col-lg-4 col-md-12 col-sm-12  p-4">
          <div class="card-info">
            <div class="title-top">
              <h2>8°C-25°C</h2>
              <img src="./images/info-1.png" alt="">
            </div>

            <div class="title-center">
              <h3>10-25 km/h</h3>
              <img src="./images/info-2.png" alt="">
            </div>

            <div class="title-text">
              <h6>
              winter in Saudi Arabia begins in late November and lasts until February,
              with temperatures varying across the country.
              The country's vast and varied geography leads to a diverse winter climate across its regions.
             </h6>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/Olive.png" alt="">
              <h5 class="title-img">
                Olive
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/date.png" alt="">
              <h5 class="title-img">
                Dates
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/orange.png" alt="">
              <h5 class="title-img">
              Orange
              </h5>
            </div>
          </div>
          <!-- text  -->
          <p> add touches of color and life to the garden when most other plants are dormant with winter-blooming flowers such as </p>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/Lily_.png" alt="">
              <h5 class="title-img">
               Lily
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/winter-5.png" alt="">
              <h5 class="title-img">
                winter jasmine
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/Rosess.png" alt="">
              <h5 class="title-img">
               Red roses
              </h5>
            </div>
          </div>
          <!--  -->
          <p>For vegetable gardens, cold-hardy crops like </p>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/winter-7.png" alt="">
              <h5 class="title-img">
                Kale
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/winter-8.png" alt="">
              <h5 class="title-img">
                Winter lettuce
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/winter-9.png" alt="">
              <h5 class="title-img">
                Carrots
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/winter-10.png" alt="">
              <h5 class="title-img">
                Brussels sprout
              </h5>
            </div>
          </div>
          <p> can continue to be harvested through the winter months, providing fresh produce during the colder season. Embrace the quiet beauty of winter and cultivate a garden that thrives even in the chilliest months with these resilient and striking plant choices.</p>
          <!--  -->
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