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
  <title> Home </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    /* Section AGRICULTURAL RECOMMENDATION */
    .main-card {
      background-color: #F8F7EA;
      padding: 20px 20px;
      border-radius: 18px;
      height: 480px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-image: url("./images/main-1.png");
      background-size: contain;
      background-repeat: no-repeat;
      background-position: right;
    }

    .main-card-title {
      font-size: #3A2D0F;
    }

    .main-card-title::before {
      content: "";
      width: 6px;
      height: 80px;
      background-color: #BEE97B;
      position: absolute;
      left: 8px;
      top: 20px;
    }

    .main-card-text {
      font-size: 17px;
      color: #3A2D0F;
      width: 75%;
    }

    /* .main-card-img{} */
    .main-card-btn {
      background-color: #4f5847;
      padding: 5px 15px;
      width: 40%;
      font-size: 25px;
      color: #ffffff;
      border-radius: 18px;
    }

    /* Section About Minbit */
    .about-munbit {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #BEE97B;
      height: 300px !important;
      padding: 30px 30px;
      border-radius: 18px;
      background-image: url("./images/login-signup.png");
      background-position: center;
      background-size: 350px;
      background-repeat: no-repeat;
      position: relative;
    }
    

    .about-munbit-title {
      color: #FFFFFF;
    }

    .about-munbit-title::before {
      content: "";
      width: 6px;
      height: 37px;
      background-color: #416D19;
      position: absolute;
      left: 10px;
      top: 30px;
    }

    .about-btn-box {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .about-munbit-btn {
      background-color: #3A2D0F;
      width: 100%;
      font-size: 20px;
      color: #ffffff;
      border-radius: 18px;
    }

    @media(max-width:768px) {
      .about-munbit-title {
        font-size: 18px;
      }

      .box-img-suppliers img {
        width: 80px;
        height: 80px;
        margin: 0 -25px;
        border-right: 8px solid #416D19;
        border-radius: 50%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
    }

    /* Section suppliers */
    .suppliers {
      background-color: #416D19;
      height: 300px;
      border-radius: 18px;
      padding: 30px 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .suppliers-title {
      position: relative;
      color: #F8F7EA;
    }

    .suppliers-title::before {
      content: "";
      width: 6px;
      height: 37px;
      background-color: #BEE97B;
      position: absolute;
      left: -18px;
      top: 2px;
    }

    .box-img-suppliers {
      width: 100%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
      height: 120px;
    }

    .box-img-suppliers img {
      width: 100px;
      height: 100px;
      margin: 0 -25px;
      border-right: 8px solid #416D19;
      border-radius: 50%;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .box-img-suppliers .suppliers-1 {
      z-index: 10;
    }

    .box-img-suppliers .suppliers-2 {
      z-index: 9;
    }

    .box-img-suppliers .suppliers-3 {
      z-index: 8;
    }

    .suppliers-box-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-top: 20px;
    }

    .suppliers-box-btn .suppliers-btn {
      background-color: #4f5847;
      width: 100%;
      font-size: 20px;
      color: #ffffff;
      border-radius: 18px;
    }

    @media(min-width:768px)and (max-width:992px) {}

    @media(max-width:768px) {
      .suppliers-title {
        font-size: 18px;
      }

      .box-img-suppliers img {
        width: 80px;
        height: 80px;
        margin: 0 -25px;
        border-right: 8px solid #416D19;
        border-radius: 50%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

    }

    @media(max-width:568px) {}

    /* Section Upload */
    .bg {
      background: #3A2D0F;
      border-radius: 18px !important;
    }

    .upload-soil {
      padding: 20px 20px;
      height: 80vh;
    }

    .upload-soil-title {
      position: relative;
      color: #F8F7EA;
      padding-bottom: 50px;
    }

    .upload-soil-title::before {
      content: "";
      width: 6px;
      height: 37px;
      background-color: #BEE97B;
      position: absolute;
      left: -18px;
      top: 5px;
    }

    .content-upload-soil {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
      width: 100%;
      height: 100%;
      gap: 80px;
    }

    .content-upload-soil .up-1 {
      width: 50%;
      overflow: hidden;
    }

    .content-upload-soil .up-2 {
      width: 20%;
    }

    .uplaod-soil-text {
      color: #F8F7EA;
    }

    .uplaod-soil-text span {
      font-weight: bold;
    }

    .upload-soil-btn {
      background-color: #ffffffff;
      width: 100%;
      font-size: 25px;
      color: #3A2D0F;
      border-radius: 18px;
    }

    /*  */
    .layer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 100px;
      position: relative;
    }

    .layer-footer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 30px;
      position: relative;
    }

    .about-setting {
      height: 140vh;
      background-image: url("./images/section-about.png");
    }

    .bg-banner {
      height: 30vh;
      background-image: url("./images/login-signup.png");
      background-size: contain;
      background-repeat: no-repeat;
      background-position: right;
    }

    .title {
      color: #ffffff;
      position: relative;
    }

    .title::before {
      content: "";
      width: 6px;
      height: 40px;
      background-color: #416D19;
      position: absolute;
      left: -18px;
      top: 5px;
    }

    .content {
      color: #FCFCFC;
    }

    .about-texts h3 {
      color: #FCFCFC;
    }

    .about-texts p {
      color: #FCFCFC;
      font-size: 20px;
    }

    /* Responsive Setting */
    @media(max-width:992px) {
      .about-setting {
        height: 150vh;
      }

      .about-texts p {
        font-size: 18px;
      }
    }

    @media(max-width:768px) {
      .about-setting {
        padding: 0 30px;
        height: 140vh;
      }

      .about-texts p {
        padding: 0 30px;
        font-size: 16px;
      }
    }

    @media(max-width:568px) {
      .about-setting {
        padding: 0 30px;
        height: 140vh;
      }

      .about-texts p {
        font-size: 12px;
      }
    }

    /*  */
    .Our-Suppliers-setting {
      height: 100vh;
    }

    .our-suppliers {
      color: #3A2D0F;
    }

    .cards-suppliers {
      padding: 40px;
      border-radius: 18px;
      width: 100%;
      height: 300px;
      background: #FCFCFC;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: all .5s;
    }

    .cards-suppliers:hover {
      background: #BEE97B;
    }

    .cards-suppliers:hover .top-arrows {
      background-color: #fcfcfc;
      color: #BEE97B;
    }

    .cards-title {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 20px;
    }

    .top-arrows {
      padding: 12px;
      border-radius: 50%;
      background-color: #BEE97B;
    }

    .cards-img {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;

    }

    .cards-img img {
      width: 50%;
    }

    /*  */
    @media(min-width:768px)and (max-width:992px) {
      .Our-Suppliers-setting {
        height: 270vh;
      }

      .cards-suppliers {
        height: 500px;
        margin: 40px 0;
      }
    }

    @media(max-width:768px) {
      .Our-Suppliers-setting {
        height: 240vh;
      }

      .cards-suppliers {
        height: 450px;
        margin: 40px 0;
      }
    }

    @media(max-width:568px) {}

    /* Our Agricultural */
    .our-Agricultural-setting {
      height: 70vh;
    }

    .cards-Agricultural {
      padding: 30px;
      border-radius: 18px;
      width: 100%;
      height: 400px;
      /* background: #FCFCFC; */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      /* cursor: pointer; */
      /* transition: all .5s; */
    }

    .img-1 {
      background-image: url("./images/suppliers-1.png");
      background-size: cover;
      background-repeat: no-repeat;
    }

    .img-2 {
      background-image: url("./images/suppliers-2.png");
      background-size: cover;
      background-repeat: no-repeat;
    }

    .img-3 {
      background-image: url("./images/suppliers-3.png");
      background-size: cover;
      background-repeat: no-repeat;
    }


    .cards-arrows {
      display: flex;
      width: 100%;
      justify-content: end;
    }

    .cards-arrows .arrows {
      background-color: #fcfcfc;
      border-radius: 18px;
      transition: all .5s;
      cursor: pointer;
    }

    .cards-arrows .arrows:hover {
      background-color: #BEE97B;
    }

    @media(min-width:768px)and (max-width:992px) {
      .our-Agricultural-setting {
        height: 220vh;
      }

      .cards-Agricultural {
        height: 500px;
        margin: 40px 0;
      }
    }

    @media(max-width:768px) {
      .our-Agricultural-setting {
        height: 180vh;
      }

      .cards-Agricultural {
        height: 420px;
        margin: 40px 0;
      }
    }

    @media(max-width:568px) {
      .cards-Agricultural {
        height: 350px;
        margin: 40px 0;
      }
    }

    .chatboxing {
      position: fixed;
      bottom: 30px;
      right: 30px;

    }

    a .chat-img {
      width: 80px;
    }
  </style>
</head>

<body style="position: relative;">

  <?php
  include("Navbar.php");
  ?>


  <div class="chatboxing">
    <a href="./chatbot.php"><img class="chat-img" src="./images/img-chat.png" alt="img-for-chat"></a>
  </div>

  <div class="container">
    <div class="row pt-5 mt-5">
      <!-- Left Section -->
      <div class="col-lg-6 col-md-12 col-sm-12" style="color:#9999;">
        <div class="main-card">
          <!-- Main Card -->
          <h2 class="main-card-title">AGRICULTURAL <br /> RECOMMENDATION</h2>
          <div class="">
            <p class="main-card-text">
            Our services offer seasonal plant recommendations, and highlighting the benefits of plants and the impact of choosing the wrong soil type..
            </p>
            <div class="btn-box mt-5" style="display: flex;  align-items: center; justify-content: center; width:100%;">
              <a style="width: 100%; text-align:center;" href="home.php#our-Agricultural-setting"><button style="background-color:#3A2D0F;" class="main-card-btn">Visit</button></a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <!-- Card For About Munbit -->
            <div class="about-munbit mt-3 ">
              <h2 class="about-munbit-title">ABOUT MUNBIT</h2>
              <div class="p-5"></div>
              <div class="about-btn-box">
                <a style="width: 100%;" href="home.php#about"><button class="about-munbit-btn">Visit</button></a>
              </div>
            </div>
          </div>
          <div class="col-6" style="color:#111;">
            <!-- Card For Our Suppliers -->
            <div class="suppliers mt-3">
              <h2 class="suppliers-title">SUPPLIERS</h2>
              <div class="box-img-suppliers">
                <img class="suppliers-1" src="./images/suppliers/agri.png" alt="agri">
                <img class="suppliers-2" src="./images/Bthrah.png" alt="Bthrah">
                <img class="suppliers-3" src="./images/suppliers/nabataty.png" alt="nabataty">
               
              </div>
              <div class="suppliers-box-btn">
                <a style="width: 100%;" href="home.php#our-suppliers"> <button style="background-color:#3A2D0F;" class="suppliers-btn">Visit</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right Section -->
      <div class="col-lg-6 col-md-12 col-sm-12 bg">
        <div class="upload-soil">
          <h2 class="upload-soil-title">Determaine Your Soil Type</h2>
          <div class="content-upload-soil">
            <img class="up-1" src="./images/upload-1.png" alt="">
            <img class="up-2" src="./images/upload-2.png" alt="">
            <p class="uplaod-soil-text">Upload Your <span> Soli Image </span> here</p>
            <a href="add_image.php" style="width:100%; text-decoration: none; color:#3A2D0F;font-size:18px;"><button class="upload-soil-btn">Upload</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section About Munbit -->
  <div class="layer"></div>
  <section class="pt-5 mt-5 pb-5 about-setting" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="about-texts">
            <h1 class="title">
              ABOUT MUNBIT
            </h1>
            <p class="content">
            Welcome to Munbit, an innovative platform designed to revolutionize agricultural practices by leveraging technology. Munbit simplifies soil type identification and plants selection , making it easier for gardeners, farmers, and agricultural enthusiasts to achieve success in their endeavors.
            Our platform uses advanced image recognition technology to accurately classify soil types, such as sandy, loamy, and clay soils. Based on the results, Munbit provides tailored plant recommendations to ensure optimal growth and sustainable farming practices.  
            Munbit is not just a tool, it is a step towards raising agricultural awareness and promoting resource conservation. By empowering users with knowledge and insights, we aim to enhance productivity, reduce waste, and contribute to the broader goals of sustainable development in Saudi Arabia.  
            Whether you're a seasoned farmer or a home gardener, Munbit is your companion for making informed agricultural decisions with confidence.
            </p>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <div class="col-lg-12">
          <div class="bg-banner"></div>
        </div>
      </div>
      <!--  -->
      <div class="row">
        <div class="col-lg-12">
          <div class="about-texts">
            <h1 class="title">MUNBIT and 2030</h1>
            <h3>Saudi Green Initiative</h3>
            <p>
              Saudi Green Initiative (SGI) is an ambitious national initiative that is focused on combating climate change, improving quality of life, and protecting the environment for future generations.
            </p>
            <p>
              Launched in 2021 by His Royal Highness Prince Mohammed bin Salman bin Abdulaziz, Crown Prince and Prime Minister, SGI is a whole-of-society initiative, uniting all sustainability efforts in the country to rapidly scale up the Kingdom’s climate action.
            </p>
            <p>
              SGI supports Saudi Arabia’s ambition to reach net zero emissions by 2060 through the Circular Carbon Economy approach and is also accelerating the country’s transition to a green economy. Three overarching targets guide SGI’s work - emissions reduction, afforestation, and land and sea protection.
            </p>
            <p>
              Since SGI’s inauguration, 77 initiatives corresponding to the three targets have been activated, representing an investment of more than $186bn and helping to drive sustainable growth. By bringing together the government and private sector, and fostering collaboration and innovation, the Kingdom’s commitments have been turned into tangible action, whilst supporting global goals.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Our Suppliers -->
  <section class="Our-Suppliers-setting" id="our-suppliers">
    <div class="layer"></div>
    <div class="container">
      <h1 class="our-suppliers title pb-5">SUPPLIERS</h1>
      <div class="row pt-5">
        <!-- Napataty -->
        <div class="col-lg-4">
          <div class="cards-suppliers">
            <div class="cards-title">
              <h4>Nabataty</h4>
              <a class="top-arrows" href="https://nabataty.com/store/"><img src="./images/top-arrows.png" alt=""></a>
            </div>
            <div class="cards-img">
              <img src="./images/suppliers/nabataty-logoo.png" alt="">
            </div>
          </div>
        </div>
        <!-- Kayan -->
        <div class="col-lg-4">
          <div class="cards-suppliers">
            <div class="cards-title">
              <h4>Bthrah</h4>
              <a class="top-arrows" href="https://www.bthrah.com/"><img src="./images/top-arrows.png" alt=""></a>
            </div>
            <div class="cards-img">
            <img src="./images/Bthrah-removebg.png" alt="" width="150" height="150">
            </div>
          </div>
        </div>
        <!-- Agri -->
        <div class="col-lg-4">
          <div class="cards-suppliers">
            <div class="cards-title">
              <h4>Agri</h4>
              <a class="top-arrows" href="https://agri.com.sa/ar/"><img src="./images/top-arrows.png" alt=""></a>
            </div>
            <div class="cards-img">
              <img src="./images/suppliers/Agrii.png" height="150" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Agricultural recommendation  -->
  <section class="our-Agricultural-setting" id="our-Agricultural-setting">
    <div class="container">
      <h1 style="color:#3A2D0F;" class="title pb-5">Agricultural recommendation </h1>
      <div class="row pt-5">
        <div class="col-lg-4">
          <div class="cards-Agricultural img-1">
            <div class="cards-title">
              <h3 class="title">Benefits of having plants</h3>
            </div>
            <div class="cards-arrows">
              <a class="arrows" style="padding: 10px;" href="benefits.php"><img src="./images/arrows-right.png" alt=""></a>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-lg-4">
          <div class="cards-Agricultural img-2">
            <div class="cards-title">
              <h3 class="title">Issues of choosing wrong soil type</h3>
            </div>
            <div class="cards-arrows">
              <a class="arrows" style="padding: 10px 15px;" href="issues.php"><img src="./images/arrows-right.png" alt=""></a>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-lg-4">
          <div class="cards-Agricultural img-3">
            <div class="cards-title">
              <h3 class="title">Plants in the seasons</h3>
            </div>
            <div class="cards-arrows">
              <a class="arrows" style="padding: 10px;" href="spring.php"><img src="./images/arrows-right.png" alt=""></a>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
  </section>

  <?php
  include("Footer.php");
  ?>

  <!-- scroll reveal  -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    // scroll reveal
    ScrollReveal({
      distance: "90px",
      duration: 2000,
      delay: 200,
      reset: true,
    });
    // 
    ScrollReveal().reveal('.main-card,.about-texts,.title,.upload-soil,.bg-banner', {
      origin: "top"
    });
    ScrollReveal().reveal('.about-munbit,.title,.cards-suppliers', {
      origin: "left"
    });
    ScrollReveal().reveal('.suppliers,.content,.cards-title', {
      origin: "right"
    });
    ScrollReveal().reveal('.upload-soil,.bg-banner,.cards-Agricultura,', {
      origin: "bottom"
    });
  </script>


</body>

</html>