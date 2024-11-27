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
  <title> Seasons </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    .seasons-setting {
      height: 80vh;
    }

    .seasons-title {
      text-align: center;
      color: #25523B;
    }

    .card {
      margin: auto;
      width: 100%;
      height: 400px;
      background-color: #fefefe;
      border-radius: 1rem;
      padding: 0.5rem;
    }

    .card__img {
      background-color: #fcfcfc;
      border-radius: 0.5rem 0.5rem 0 0;
      padding: 1.5rem;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card__img img {
      width: 100%;
      height: 100%;
    }

    .card__footer {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      flex-wrap: nowrap;
      padding: 0.75rem;
      row-gap: 1rem;
      font-weight: 700;
      font-size: 0.875rem;
    }

    @media (min-width: 340px) {
      .card__footer {
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
      }
    }

    .card__job-summary {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-direction: row;
      flex-wrap: nowrap;
      gap: 0.75rem;
    }

    .card__btn {
      width: 100%;
      font-weight: 400;
      border: none;
      display: block;
      cursor: pointer;
      text-align: center;
      padding: 0.5rem .25rem;
      border-radius: 1rem;
      background-color: #25523B;
      border: 2px solid #255238;
      transition: all .5s;
    }

    .card__btn:hover {
      background-color: #f8f9fb;
    }

    a:hover .card__btn {
      color: #25523B !important;
    }

    a {
      text-decoration: none !important;
    }

    a .card__btn {
      text-decoration: none !important;
      color: #fcfcfc !important;
      font-size: 1rem;
    }

    @media (min-width: 340px) {}

    /* End Card Design */

    /* الكود الخاص بـ توافق الشاشات */
    @media(min-width:768px)and (max-width:992px) {
      .seasons-setting {
        height: 130vh;
      }

    }

    @media(max-width:768px) {
      .seasons-setting {
        height: 210vh;
      }

    }

    @media(max-width:568px) {
      .seasons-setting {
        height: 210vh;
      }
    }
  </style>
</head>

<body>

  <?php
  include("Navbar.php");
  ?>

  <section class="seasons-setting">
    <div class="container">
      <div class="seasons-title pt-5 mb-5">
        <h1>Seasons</h1>
      </div>
      <!-- Row Of Element  -->
      <div class="row">
        <!-- box summer -->
        <div class="col-lg-3 col-md-6 col-sm-12 pt-5">
          <!-- /* From Uiverse.io by Creatlydev */  -->
          <article class="card">
            <div class="card__img">
              <img src="./images/autumn.png" alt="">
            </div>

            <div class="card__footer">
              <div class="card__job-summary">
                <div class="card__job">
                  <p class="card__job-title"> SUMMER </p>
                </div>
              </div>
              <a style="width: 100%;" href="summer.php"><button class="card__btn">view</button></a>
            </div>
          </article>
        </div>
        <!-- Box  -->
        <div class="col-lg-3 col-md-6 col-sm-12 pt-5">
          <!-- /* From Uiverse.io by Creatlydev */  -->
          <article class="card">
            <div class="card__img">
              <img src="./images/winter.png" alt="">
            </div>

            <div class="card__footer">
              <div class="card__job-summary">
                <div class="card__job">
                  <p class="card__job-title"> WINTER </p>
                </div>
              </div>
              <a style="width: 100%;" href="winter.php"><button class="card__btn">view</button></a>
            </div>
          </article>
        </div>
        <!-- Box  -->
        <div class="col-lg-3 col-md-6 col-sm-12 pt-5">
          <!-- /* From Uiverse.io by Creatlydev */  -->
          <article class="card">
            <div class="card__img">
              <img src="./images/autumn.png" alt="">
            </div>

            <div class="card__footer">
              <div class="card__job-summary">
                <div class="card__job">
                  <p class="card__job-title"> Autumn </p>
                </div>
              </div>
              <a style="width: 100%;" href="autumn.php"><button class="card__btn">view</button></a>
            </div>
          </article>
        </div>
        <!-- Box  -->
        <div class="col-lg-3 col-md-6 col-sm-12 pt-5">
          <!-- /* From Uiverse.io by Creatlydev */  -->
          <article class="card">
            <div class="card__img">
              <img src="./images/spring.png" alt="">
            </div>

            <div class="card__footer">
              <div class="card__job-summary">
                <div class="card__job">
                  <p class="card__job-title"> SPRING </p>
                </div>
              </div>
              <a style="width: 100%;" href="spring.php"><button class="card__btn">view</button></a>
            </div>
          </article>
        </div>
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
  <!-- mixitup cdn js -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>

// scroll reveal
ScrollReveal({
    distance: "90px",
    duration: 2000,
    delay: 200,
    reset: true ,
});
// 
ScrollReveal().reveal('.seasons-title,.card__job-title' , { origin: "top" });
ScrollReveal().reveal('.card,.card__btn', { origin: "left" });
ScrollReveal().reveal('.card__img', { origin: "right" });
ScrollReveal().reveal('.card__footer,.card-btn', { origin: "bottom" });
</script> -->


</body>

</html>