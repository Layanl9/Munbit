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
  <title> Spring </title>
  <style>
    .spring-setting {
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
      .spring-setting {
        height: auto;
      }

      .card-info {
        width: 80%;
      }
    }

    @media(min-width:768px)and (max-width:992px) {
      .spring-setting {
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
      .spring-setting {
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
  <section class="spring-setting pt-5 mt-5">
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
      </div>


      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" style="color: #000;" href="./spring.php">| Spring</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#BEE97B;" href="winter.php">| Winter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#BEE97B;" href="./autumn.php">| Autumn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#BEE97B;" href="./summer.php">| Summer</a>
        </li>
      </ul>

      <!-- row of element -->
      <div class="row">
        <div class="col-lg-12 pt-5">
            <swiper-slide><img src="./images/spring.png" alt=""></swiper-slide>
        </div>
      </div>
      <!--  -->
      <div class="row pt-5  ">
        <!-- box of texts -->
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="card-text">
            <h1 class="title">SPRING</h1>
            <p class="text ms-4">
            Spring in Saudi Arabia, lasting from March to May, is a crucial season for agriculture, offering favorable weather and extended daylight hours that benefit a variety of crops. The agricultural regions of <span style="color:#BEE97B;">Al Baha</span>,<span style="color:#BEE97B;">Al Hasa</span>, and <span style="color:#BEE97B;">Jazan</span> particularly flourish during this period, showcasing their diverse agricultural outputs.
            <span style="color:#BEE97B;">Al Baha</span>, with its mountainous terrain and cooler climate, is renowned for <span style="color:#BEE97B;">hony</span> production and the cultivation of <span style="color:#BEE97B;">coffee</span> and <span style="color:#BEE97B;">pomegranates</span>, which thrive during spring.<span style="color:#BEE97B;">Al Hasa</span>, located in the Eastern Province, stands out for its lush date palm groves and its production of <span style="color:#BEE97B;">vegetables</span> and <span style="color:#BEE97B;">herbs</span>, supported by an extensive network of traditional and modern irrigation systems. In the far south,<span style="color:#BEE97B;">Jazan</span> becomes a hub for tropical fruits such as <span style="color:#BEE97B;">mangoes</span>, <span style="color:#BEE97B;">papayas</span>, and <span style="color:#BEE97B;">bananas</span>, as the warm yet mild spring conditions provide ideal growing conditions.
            Seasonal rains, especially in the southwestern highlands, play a vital role in replenishing water sources and enhancing soil fertility during spring. These rains are essential for forage crops, which support the livestock sector, a cornerstone of Saudi Arabia's agricultural economy. The spring season is also marked by the cultivation of essential grains, legumes, and leafy greens, enriching local markets with fresh and nutritious produce.
            Spring is not only a period of agricultural abundance but also a testament to the adaptability and resourcefulness of Saudi farmers. It reinforces the country’s progress toward achieving food security and self-sufficiency, while also supporting vibrant local markets with a wide range of fresh, high-quality produce.
            </p>
          </div>
        </div>
        <!-- box of information -->
        <div class="col-lg-4 col-md-12 col-sm-12 ">
          <div class="card-info">
            <div class="title-top">
              <h2>20°C-35°C</h2>
              <img src="./images/info-1.png" alt="">
            </div>

            <div class="title-center">
              <h3>10-20 km/h</h3>
              <img src="./images/info-2.png" alt="">
            </div>

            <div class="title-text">
              <h6>Spring in Saudi Arabia begins in March and lasts until May, bringing a shift in temperatures that vary widely across the country due to its diverse geography. In most regions, the weather becomes milder, with pleasant days and cooler nights.</h6>
            </div>
          </div>
        </div>
          <!--  -->
          <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/banana.png" alt="">
              <h5 class="title-img">
              Banana
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/pomegranate.png" alt="">
              <h5 class="title-img">
              Pomegranate
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/coffeee.png" alt="">
              <h5 class="title-img">
              Coffee
              </h5>
            </div>
          </div>
          <p>add touches of color and life to the garden when most other plants are dormant with spring-blooming flowers such as </p>
        <!--  -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-1.png" alt="">
              <h5 class="title-img">
                tulips
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-2.png" alt="">
              <h5 class="title-img">
                crocuses
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-3.png" alt="">
              <h5 class="title-img">
                daffodils
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-4.png" alt="">
              <h5 class="title-img">
                hyacinths
              </h5>
            </div>
          </div>
          <!-- text  -->
          <p>which paint the landscape with vibrant colors and sweet fragrances.Spring is also the ideal season for sowing seeds of cool-season vegetables like </p>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/carrots.png" alt="">
              <h5 class="title-img">
                carrots
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-6.png" alt="">
              <h5 class="title-img">
                radishes
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-7.png" alt="">
              <h5 class="title-img">
                peas
              </h5>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="cards-img">
              <img src="./images/spring-8.png" alt="">
              <h5 class="title-img">
                spinach
              </h5>
            </div>
          </div>
          <!--  -->
          <p>
            These plants not only bring joy and freshness to your garden but also benefit from the moderate temperatures and ample rainfall typical of spring, ensuring a flourishing and fruitful garden throughout the season. Embrace the spirit of rejuvenation that spring brings and create a blooming oasis with these diverse and resilient plant choices.</p>
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