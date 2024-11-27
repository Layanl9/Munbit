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
  <title> Benefits </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
.benefits-setting{
      height: 120vh;
      
}
.penefits-title{
      text-align:center;
}
.cards-benefits{
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
      color:#224D2C;
}
.card-text{
      color:#4F5847;
      display: flex;
      flex-wrap: nowrap;
}
.card-btn{
    color: #224D2C;
    width: 100%;
    padding: 5px;
    background: #0c513f45;
    border-radius: 18px;
}
.footer-text{    
    font-size: 18px;
    font-weight: 400;


}
.footer-text span {
  font-weight: 700;
}
.footer-btn{
    padding: 10px;
    background: #25523B;
    border-radius: 18px;
    width: 25%;
    

}

.footer-btn a{
  color: #ffffff;
  text-decoration: none;
}

/* تعديل التنسيق الخاص بـ المودل */
.modal-content{
    align-items: end;
    padding: 30px 40px;
    border-radius: 30px !important;
    height: auto;
}

.modal-header{
  padding: 0 !important;
  border-bottom:0 !important; 
}

.modal-header .close{
    color:#25523B;
    font-size: 35px;
    border: 0;
    background: transparent;
}

.modal-body h4{
  color:#224D2C;
}

.modal-body p {
  color:#4F5847;
  line-height: 26px;
  margin-top: 15px;
}
.layer-footer {
      background-image: url("./images/Layer_1.png");
      height: 20vh;
      top: 30px;
      position: relative;
    }
/* الكود الخاص بـ توافق الشاشات */
@media(min-width:768px)and (max-width:992px){
.benefits-setting{
    height: 150vh;
}
.cards-benefits{
  height: 230px;
  padding: 20px 40px;
}
}
@media(max-width:768px){
  .benefits-setting{
    height: 160vh;
  }
  .cards-benefits{
  height: 230px;
  padding: 20px 40px;
}
}

@media(max-width:568px){
  .benefits-setting{
    height: 155vh;
}
.cards-benefits{
  height: 230px;
  padding: 20px 40px;
}
}

</style>
</head>

<body>
<!--  -->
  <?php
  include("Navbar.php");
  ?>
<!-- Benefits Page -->
<section class="benefits-setting pt-5 mt-5">
    <div class="container">
        <div class="penefits-title pt-5 mb-5">
          <h1>
            Benefits Of Having Plants
          </h1>
        </div>
        <!-- Row Of Elements -->
        <div class="row">
          <div class="col-lg-4 pt-5">
            <!-- box 1 -->
            <div class="cards-benefits">
              <h6 class="card-title">IMPROVED AIR QUALITY</h6>
              <p class="card-text">
                Plants help purify the air by absorbing pollutants such as carbon dioxide, formaldehyde ..
              </p>
              <button  type="button" class="card-btn" 
              data-bs-toggle="modal" data-bs-target="#IMRPOVED">
              Read More</button>
            </div>
          </div>
          <!-- box 2 -->
              <div class="col-lg-4 pt-5">
            <div class="cards-benefits">
              <h6 class="card-title">ENHANCED MENTAL HEALTH</h6>
              <p class="card-text">
                Interacting with plants has been linked to improved mental health..
              </p>
              <button type="button" class="card-btn" data-bs-toggle="modal" data-bs-target="#Enhanced">Read More</button>
            </div>
          </div>
          <!-- box 3 -->
              <div class="col-lg-4 pt-5">
            <div class="cards-benefits">
              <h6 class="card-title">STRESS REDUCTION</h6>
              <p class="card-text">
                Being around plants and nature has been shown to reduce stress levels and promote relaxation..
              </p>
              <button type="button" class="card-btn" data-bs-toggle="modal" data-bs-target="#STRESS">Read More</button>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="footer-card pt-5 mt-3 text-center">
          <p class="footer-text">You have no plants? come and shop with <span> MUNIBT </span> suppliers.</p>
          <button class="footer-btn"> <a href="home.php#our-suppliers">Shop Now</a></button>
        </div>
    </div>
</section>
<!-- IMRPOVED AIR QUALITY Modal -->
<div class="modal fade" id="IMRPOVED" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
            <h4>IMPROVED AIR QUALITY</h4> 
            <p>
            Improved air quality is one of the most significant benefits plants provide, particularly in indoor environments where air pollutants can accumulate and negatively impact human health. In enclosed spaces such as homes, offices, and classrooms, air circulation is often limited, leading to a buildup of harmful substances that can affect respiratory health, productivity, and overall well-being. Plants play a vital role in addressing these issues by actively purifying the air through the natural process of photosynthesis and other mechanisms.
Through photosynthesis, plants absorb carbon dioxide from the air and release oxygen, which is essential for human respiration. This process not only replenishes oxygen levels but also contributes to the balance of gases in the environment. Additionally, plants have the unique ability to capture and neutralize various indoor air pollutants, including carbon dioxide, formaldehyde, benzene, and volatile organic compounds (VOCs). These pollutants are often emitted by household items such as furniture, cleaning products, building materials, and electronic devices, making their presence in indoor environments almost unavoidable. 
Plants absorb these harmful substances through their leaves and roots, utilizing some as nutrients while breaking down others into harmless byproducts. For example, VOCs, which are associated with health issues like headaches, respiratory irritation, and allergies, can be significantly reduced by the presence of plants. By acting as natural air filters, plants create a cleaner and healthier indoor atmosphere, reducing the concentration of airborne toxins.
The oxygen released during photosynthesis is another critical contribution of plants to air quality. Higher oxygen levels can help mitigate the risk of health issues such as fatigue, respiratory problems, and allergies. The presence of plants can also improve humidity levels, as they release moisture into the air through transpiration. This added humidity can help alleviate dry skin, throat irritation, and respiratory discomfort, particularly in dry or air-conditioned spaces.
By improving air quality, increasing oxygen levels, and reducing pollutants, plants offer a simple yet effective way to promote health and well-being. Incorporating indoor plants into living and working spaces is not just about decoration—it’s a proactive step toward creating cleaner, healthier, and more sustainable environments for everyone.

          </p>
        </div>
    </div>
  </div>
</div>

<!-- Enhanced Mental Health Modal -->
<div class="modal fade" id="Enhanced" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
            <h4>Enhanced Mental Health</h4>
            <p> Interacting with plants has been strongly linked to enhanced mental health and overall well-being, offering a wealth of psychological benefits that contribute to happiness, emotional balance, and a higher quality of life. Whether through nurturing them, observing their growth, or simply enjoying their presence, plants have a profound ability to positively affect our mental and emotional states. This connection to greenery provides a sense of purpose, calm, and connection that is increasingly valued in today’s fast-paced, technology-driven world.
Caring for plants instills a sense of responsibility and accomplishment. The act of tending to a living organism, providing water, light, and nutrients, and seeing it flourish creates a tangible sense of achievement. This process not only fosters pride and satisfaction but also boosts self-esteem and confidence. For individuals seeking a sense of purpose or routine, caring for plants offers a simple yet deeply rewarding activity that grounds them in their environment. Watching a plant grow and thrive under one's care fosters a connection to the natural world, reminding us of our interdependence with nature.
Beyond fostering responsibility and accomplishment, interacting with plants can be particularly beneficial for alleviating feelings of loneliness and depression. The presence of greenery in a home or workspace can evoke a sense of calm and tranquility, providing a therapeutic escape from the pressures and chaos of daily life. For individuals who may feel isolated, caring for plants can mimic the nurturing qualities of companionship, offering a comforting presence in their space. This interaction helps fill emotional gaps, creating an environment that feels alive, welcoming, and supportive.
Moreover, the act of interacting with plants promotes a deeper connection to the environment, which can inspire feelings of gratitude and contentment. Being in the presence of greenery has been shown to improve mood and cognitive function, helping individuals feel more focused and emotionally balanced. Plants also encourage us to establish a routine that incorporates elements of care and nurture, contributing to a structured, intentional lifestyle that benefits mental health.
The presence of plants extends these psychological benefits to shared spaces as well. Offices, classrooms, and public areas with plants have been found to promote better interpersonal interactions and enhance overall group morale. Green environments reduce tension, improve communication, and foster a sense of shared well-being, making plants a valuable addition to both personal and communal spaces.
By fostering a sense of accomplishment, reducing stress, promoting mindfulness, and alleviating feelings of loneliness or depression, plants serve as natural allies for mental health. They create a connection to the natural world that nurtures both the mind and soul, offering an accessible and effective way to enhance emotional well-being. In a world that often feels overwhelming and disconnected, the simple act of interacting with plants can provide a much-needed source of comfort, balance, and joy.
</div>
    </div>
  </div>
</div>
<!-- footer -->
<?php
  include("Footer.php");
  ?>
<div class="layer"></div>

<!-- Stress Reduction -->
<div class="modal fade" id="STRESS" role="dialog">
  <div class="modal-dialog" >  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4> Stress Reduction</h4>  
        <p> The presence of plants and nature holds a profound ability to positively influence human well-being and mental health by reducing stress and promoting relaxation. Whether indoors in a home or office setting, or outdoors in a garden or park, greenery has a unique way of creating a soothing and tranquil atmosphere. This interaction with plants and natural environments is not only aesthetically pleasing but also provides measurable benefits for mental and physical health, which have been consistently supported by scientific research.
One of the most significant ways plants contribute to well-being is through stress reduction. Numerous studies have demonstrated that spending time in the presence of plants, whether actively caring for them or simply admiring their beauty, can significantly lower stress levels. Greenery has a calming effect that helps regulate the body’s physiological responses to stress. For example, being near plants can lower cortisol levels—the hormone responsible for stress—helping individuals feel more relaxed and at ease. Additionally, the presence of plants can reduce heart rate and blood pressure, creating a restorative environment that promotes physical and emotional health.
Interacting with plants has also been shown to alleviate feelings of anxiety and improve mood. Activities such as watering, pruning, or arranging plants provide a meditative and grounding experience that helps shift focus away from daily worries. Even passive interactions, such as sitting in a room with greenery or gazing out at a natural landscape, can evoke a sense of serenity and mindfulness. This connection to nature helps individuals break free from the pressures of modern life, fostering a more positive outlook and greater emotional resilience.
Indoor plants, in particular, play a crucial role in enhancing living and working spaces. Beyond their visual appeal, they create a sense of balance and harmony that transforms sterile or chaotic environments into inviting and peaceful ones. For individuals in urban settings, where access to outdoor nature may be limited, indoor plants act as a bridge to the natural world. This connection to greenery within built environments has been associated with improved mental health outcomes, including decreased levels of depression and an increased sense of well-being.
The benefits of plants extend beyond individual mental health to influence the atmosphere of shared spaces. For example, the inclusion of plants in offices, hospitals, or classrooms has been linked to enhanced group morale, better communication, and increased productivity. In healthcare settings, the presence of plants has been found to reduce recovery times for patients and improve overall satisfaction with care. These effects underscore the importance of integrating plants into public and private spaces alike.
Furthermore, the psychological benefits of plants are deeply rooted in our evolutionary connection to the natural world. Humans have an innate affinity for nature, known as biophilia, which drives us to seek out and connect with greenery. This connection is not merely superficial; it taps into our primal need for environments that promote safety, growth, and renewal. The presence of plants fulfills this need, providing a comforting reminder of our place within the natural ecosystem.
By reducing stress, improving mood, and fostering a connection to nature, plants play an essential role in supporting mental health. Their ability to transform both personal and shared spaces into havens of tranquility and comfort highlights their value in our lives. In a world that is increasingly fast-paced and disconnected, the presence of plants offers a vital source of balance, peace, and renewal.

      </p>
      </div>
    </div>
  </div>
</div>



</body>

</html>