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
  <title> Services </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
.services-setting{
    height: 90vh;
}
.services-title{
  text-align:center;
  padding-top: 4rem;
}
.cards-services{
    display: flex;
    background: #F9F9F9;
    height: 250px;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 45px;
    border-radius: 18px;
    box-shadow: 0 0 0 rgba(0, 0, 0, 0.9);
    gap: 20px;
}
.cards-services h3 {
  color:#25523b;
}
.arrows-services {
    display: flex;
    width: 100%;
    justify-content: end;
    align-items: center;
    cursor: pointer;
}
.arrows-services img {
    padding: 15px;
    width: 45px;
    background-color: #25523B;
    border-radius: 18px;
}
/* الكود الخاص بـ توافق الشاشات */
@media(min-width:768px)and (max-width:992px){
  .services-setting{
    height: 120vh;
  }
  .cards-services{
    height: 180px;
  }
}
@media(max-width:768px){
  .services-setting{
    height: 140vh;
  }
}

@media(max-width:568px){

}

a{
  text-decoration: none !important;
}
</style>
</head>

<body>

  <?php
  include("Navbar.php");
  ?>

  <section class="services-setting pt-5 mt-5">
    <div class="container">
      <div class="services-title">
        <h1> Agricultural recommendation </h1>
      </div>
      <div class="row pt-5 mt-5">
        <div class="col-lg-4">
          <div class="cards-services m-3">
            <h3>Benefits of having plans</h3>
            <div class="arrows-services">
              <a href="benefits.php"> <img src="./images/arrows-right.png" alt=""> </a>
            </div>
          </div>
        </div>
        <!--  -->
          <div class="col-lg-4">
          <div class="cards-services m-3">
            <h3>Isssues of choosing wrong soil type</h3>
            <div class="arrows-services">
              <a href="issues.php"> <img src="./images/arrows-right.png" alt=""></a>
            </div>
          </div>
        </div>
        <!--  -->
          <div class="col-lg-4">
          <div class="cards-services m-3">
            <h3>Plants in the seasons</h3>
            <div class="arrows-services">
              <a href="seasons.php"> <img src="./images/arrows-right.png" alt=""></a>
            </div>
          </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
<script>

// scroll reveal
ScrollReveal({
    distance: "200px",
    duration: 2000,
    delay: 200,
    // reset: true ,
});
// 
ScrollReveal().reveal('.services-title,' , { origin: "top" });
ScrollReveal().reveal('.cards-services', { origin: "left" });
ScrollReveal().reveal('.arrows-services', { origin: "right" });
</script>



</body>

</html>