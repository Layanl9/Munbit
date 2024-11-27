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
  <title> Issues </title>
<style>
/* التنسيق الخاص بالصفحة */
.issues-setting{
      height: 100vh;
}
.issues-title{
    text-align:center;
}
.cards-issues{
      height: 470px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 60px;
      padding: 0px 30px;
      text-align: center;
      border-radius: 18px;
      border: 2px solid #224D2C;
}
.card-title{
      color:#224D2C;
}
.card-text{
      color:#4F5847;
}
.card-btn{
    color: #224D2C;
    width: 100%;
    padding: 5px;
    background: #0c513f45;
    border-radius: 18px;
}
/* تعديل التنسيق الخاص بـ المودل */
.modal-content{
    align-items: end;
    padding: 30px 40px;
    border-radius: 30px !important;
    height:auto;
    
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
  .issues-setting{
    height: 130vh;
  }
  .cards-issues {
  height: 230px;
  padding: 20px 40px;
}

}
@media(max-width:768px){
  .issues-setting{
    height: 150vh;
  }
  .cards-issues{
  height: 230px;
  padding: 20px 40px;
  }
}

@media(max-width:568px){
  .issues-setting{
    height: 140vh;
  }
  .cards-issues{
  height: 270px;
  padding: 20px 40px;
  }
}
</style>
</head>

<body>

<?php
  include("Navbar.php");
?>

<section class="issues-setting " style="padding-top: 70px;">
  <div class="container">
    <div class="issues-title pt-5 mb-5">
      <h1>
        Issues of choosing wrong soil type
      </h1>
    </div>
    <!-- Row Of Elements -->
    <div class="row">

      <!-- box 1 -->
      <div class="col-lg-4 col-md-4 col-sm-12 pt-5">
        <div class="cards-issues">
          <h5 class="card-title"> POOR DRINAGE </h5>
          <p class="card-text">Using soil that retains too much water or drains poorly can lead to waterlogged conditions around plant roots..</p>
          <button type="button" class="card-btn" data-bs-toggle="modal" data-bs-target="#POOR">Read More</button>
        </div>
      </div>

    <!-- box 2 -->
      <div class="col-lg-4 col-md-4 col-sm-12 pt-5">
        <div class="cards-issues">
          <h5 class="card-title"> Nutrient Deficiency Or Toxicity </h5>
          <p class="card-text">Different plants have specific nutrient requirements. Using the wrong soil type can result in either a deficiency..</p>
          <button type="button" class="card-btn" data-bs-toggle="modal" data-bs-target="#Nutrient">Read More</button>
        </div>
      </div>

        <!-- box 3 -->
      <div class="col-lg-4 col-md-4 col-sm-12 pt-5">
        <div class="cards-issues">
          <h5 class="card-title"> stunted growth and poor development </h5>
          <p class="card-text">Soil that doesn't provide the right structure and texture can hinder root development..</p>
          <button type="button" class="card-btn" data-bs-toggle="modal" data-bs-target="#stunted">Read More</button>
        </div>

          <!-- stunted growth and poor development -->
<div class="modal fade" id="stunted" role="dialog">
  <div class="modal-dialog" >  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <h4>Stunted Growth And Poor Development</h4>  
        <p> 
          Stunted Growth and Poor Development in plants are often direct consequences of soil inadequacies that impede proper root development and overall plant vitality. The structure and texture of soil play a crucial role in determining a plant's ability to thrive. Compacted soil is a common issue that restricts root penetration and inhibits water infiltration. In compacted soil, roots struggle to grow and spread, leading to limited access to essential nutrients and water. This restriction hampers the plant's ability to establish a healthy root system, resulting in stunted growth and weakened plants that are more susceptible to stress, disease, and environmental pressures. On the other hand, sandy soil presents a different challenge. Sandy soil drains water too quickly, which can lead to poor water retention and nutrient uptake by plant roots. In such conditions, water and nutrients may leach rapidly through the soil, depriving plants of the essential resources they need for growth and development. As a result, plants may exhibit symptoms of drought stress, such as wilting, yellowing leaves, and overall poor vigor.
        </p>
      </div>
    </div>
  </div>
</div>


        
      </div>



    </div>
  </div>
</section>


<!-- POOR DRINAGE Modal -->
<div class="modal fade" id="POOR" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
            <h4>POOR DRINAGE</h4> 
          <p>
          Using soil that retains too much water or drains poorly can lead to waterlogged conditions around plant roots, which can have devastating consequences for plant health and growth. Poor drainage occurs when water accumulates faster than it can escape through the soil, often due to compacted soils, improper soil texture, or a lack of organic matter to improve structure. This condition creates an environment where plant roots are submerged in excessive moisture, resulting in a cascade of problems.  
          The most immediate and severe consequence of poor drainage is root rot. Prolonged waterlogging suffocates roots by depriving them of oxygen, a critical component for cellular respiration and nutrient uptake. Without oxygen, roots cannot perform essential functions, leading to the decay of root tissues. This suffocation not only weakens the plant’s ability to absorb water and nutrients but also creates ideal conditions for pathogenic fungi and bacteria to attack. These pathogens thrive in waterlogged environments, compounding the damage by spreading diseases such as root rot and powdery mildew that can devastate entire plant populations if left unchecked.  
          Beyond root rot, poor drainage disrupts the delicate balance of nutrients in the soil. Excessive moisture can leach away essential nutrients, such as nitrogen, potassium, and magnesium, reducing their availability to plants. On the other hand, waterlogged conditions can also cause nutrients like iron and manganese to become locked in the soil, leading to deficiencies. These imbalances often manifest as visible signs of stress in plants, including yellowing leaves, reduced flowering, poor fruit development, and overall stunted growth.  
          Additionally, the prolonged presence of water in the soil can lead to soil compaction and erosion over time. Waterlogged soils are often more prone to becoming compacted, as the weight of water pushes soil particles closer together. Compaction further reduces pore space, making it even harder for water to drain and air to circulate. Erosion can also strip away the topsoil, which is rich in organic matter and nutrients, leaving behind a degraded soil structure that is less capable of supporting healthy plant growth.  
          The lack of oxygen in waterlogged soil not only affects plant roots but also impacts the soil's ecosystem. Beneficial microbes that play vital roles in decomposing organic matter and cycling nutrients struggle to survive in anaerobic (oxygen-deprived) conditions. As these microbes decline, the soil loses its ability to sustain plant health effectively, further compounding the challenges of poor drainage.  
          Ultimately, poor drainage creates a vicious cycle of soil degradation, plant stress, and increased vulnerability to diseases. Preventing these issues requires careful attention to soil management practices, such as improving drainage with organic amendments, creating raised beds, or installing drainage systems. Addressing poor drainage is critical to maintaining healthy, productive plants and preserving soil quality over the long term.
          </p>
        </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php
  include("Footer.php");
  ?>
<div class="layer"></div>

<!-- Nutrient Deficiency Or Toxicity Modal -->
<div class="modal fade" id="Nutrient" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
        </div>
          <div class="modal-body">
            <h4>Nutrient Deficiency Or Toxicity</h4>
            <p> 
            Nutrient Deficiency or Toxicity is a critical problem that arises when plants are cultivated in soil with an unsuitable pH level, leading to significant imbalances in the availability of essential nutrients necessary for plant growth and development. Each plant species has specific nutrient requirements and an optimal pH range in which these nutrients are most readily available. Deviations from this range can have severe consequences, causing plants to either suffer from deficiencies in crucial nutrients or experience toxicity due to an overabundance of certain elements.
For example, plants like azaleas and rhododendrons, which thrive in acidic soil conditions, require a pH range that allows for the proper uptake of nutrients such as iron and manganese. When these plants are grown in alkaline soil, the higher pH levels interfere with their ability to absorb these vital nutrients, resulting in deficiencies. This often manifests in visible symptoms such as yellowing leaves (chlorosis), poor flowering, and stunted growth. Over time, the plant’s overall health deteriorates, and it may fail to thrive, regardless of care or additional fertilization.
Conversely, plants that are sensitive to acidic conditions, such as many vegetables (e.g., spinach and lettuce) or annual flowers (e.g., petunias), may suffer from nutrient toxicity when grown in soil that is too acidic. In highly acidic soil, elements like aluminum, manganese, and iron can become excessively concentrated, reaching toxic levels that harm the plant. Toxicity can lead to symptoms such as leaf discoloration (brown or black spots), leaf burn, wilting, and poor root development. In severe cases, this toxicity can stunt plant growth entirely and compromise yields, reducing the plant's ability to reproduce or provide a harvest.
The effects of nutrient imbalances due to improper soil pH extend beyond visible symptoms. These imbalances can weaken plants, making them more susceptible to diseases, pests, and environmental stressors such as drought or extreme temperatures. Nutrient deficiencies can compromise a plant’s ability to photosynthesize efficiently, reducing energy production and slowing growth. Similarly, toxicity can damage root systems, impairing water and nutrient uptake, further exacerbating the plant's struggles.
To address and prevent these issues, it is crucial to understand the nutrient needs and pH preferences of each plant species before planting. Soil testing plays a vital role in identifying the current pH level and nutrient availability in the soil. Once the soil's properties are understood, adjustments can be made to correct imbalances. For instance, if the soil is too alkaline for acid-loving plants, adding amendments such as sulfur or organic matter can lower the pH and improve nutrient availability. Conversely, lime can be added to acidic soils to raise the pH and reduce the toxicity of certain elements.
Balancing soil pH not only supports optimal nutrient availability but also promotes a healthier and more productive growing environment. By ensuring that the soil meets the specific needs of the plants, gardeners and farmers can avoid common issues related to nutrient deficiencies or toxicities, resulting in vibrant, thriving plants and higher productivity. Proper soil management and awareness of plant-soil compatibility are fundamental to successful gardening and agriculture.
            </p>
    </div>
  </div>
</div>


</body>

</html>