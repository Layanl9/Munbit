<?php
include("conn.php");
$id = $_SESSION['id'];
$sql_image = "SELECT * FROM images WHERE user_id = $id";
$query_image = mysqli_query($conn,$sql_image);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Planting Records </title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<style>
::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1 {
    font-weight: 600;
    font-size: 1.5rem;
}


.wrapper {
    display: flex;
    height: 100vh;
}

.main {
    width: 100%;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    background-color: #fafbfe;
}

#sidebar {
    width: 70px;
    min-width: 70px;
    z-index: 1000;
    transition: all .25s ease-in-out;
    background-color: #224D2C;
    display: flex;
    flex-direction: column;
}

#sidebar.expand {
    width: 260px;
    min-width: 260px;
}

.toggle-btn {
    background-color: transparent;
    cursor: pointer;
    border: 0;
    padding: 1rem 1.5rem;
}

.toggle-btn i {
    font-size: 1.5rem;
    color: #FFF;
}

.sidebar-logo {
    margin: auto 0;
}

.sidebar-logo a {
    color: #FFF;
    font-size: 1.15rem;
    font-weight: 600;
}

#sidebar:not(.expand) .sidebar-logo,
#sidebar:not(.expand) a.sidebar-link span {
    display: none;
}

.sidebar-nav {
    padding: 2rem 0;
    flex: 1 1 auto;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #FFF;
    display: block;
    font-size: 0.9rem;
    white-space: nowrap;
    border-left: 3px solid transparent;
}

.sidebar-link i {
    font-size: 1.1rem;
    margin-right: .75rem;
}

a.sidebar-link:hover {
    background-color: rgba(255, 255, 255, .075);
    border-left: 3px solid #BEE97B;
}

.sidebar-item {
    position: relative;
}

#sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
    position: absolute;
    top: 0;
    left: 70px;
    background-color: #224D2C;
    padding: 0;
    min-width: 15rem;
    display: none;
}

#sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
    display: block;
    max-height: 15em;
    width: 100%;
    opacity: 1;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
    border: solid;
    border-width: 0 .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
    transform: rotate(45deg);
    transition: all .2s ease-out;
}

/*  */
.planting-setting {
  width: 100%;
  height: 100vh;
}

.plating-title{
  padding: 30px 40px;
  border-bottom: 1px solid #000;
}
.plating-title h2 {
  text-decoration: underline;
  text-transform: capitalize;
}

.btn-warning{
  position: relative;
  padding: 11px 16px;
  font-size: 15px;
  line-height: 1.5;
  border-radius: 3px;
  color: #fff;
  background-color: #224D2C;
  border: 0;
  transition: 0.2s;
  overflow: hidden; 
}

.btn-warning input[type = "file"]{
  cursor: pointer;
  position: absolute;
  left: 0%;
  top: 0%;
  transform: scale(3);
  opacity: 0;
}

.btn-warning:hover{
  background-color: #BEE97B;
}

table {
  width: 100%;
  padding: 20px;
  border-radius: 20px;
}

table tr{
  background: #eee;
  padding: 20px;
  margin: 20px 0;
}
</style>
</head>

<body>
<div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
            </div>
            <ul class="sidebar-nav">
              <li class="sidebar-item">
                      <a href="home.php" class="sidebar-link">
                      <i class="lni lni-home"></i>  
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="update_profile.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="planting_records.php" class="sidebar-link">
                        <i class="lni lni-bookmark"></i>
                        <span>Planting Record</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="logout.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
<section class="planting-setting">
    <div class="container-fluid">

      <div class="plating-title">
        <input type="checkbox" id="check" style="width: 100%;">
        <h2>Planting Record</h2>
      </div>

      <div class="row">
        <div class="col-lg-12 p-5">
          <div class="upload">
            <button type = "button" class = "btn-warning">
              <a style="text-decoration: none; color:#FFF;" href="add_image.php">
                <!-- <i class="lni lni-upload"></i>  -->
                Add Image
              </a>
                <!-- <input type="file"> -->
            </button>
          </div>
        </div>
      </div>
<div class="row">
  <div class="col-lg-12">
    <table>
      <tr style="background-color:transparent;">
          <th>ID</th>
          <th>Soil Type</th>
          <th colspan="3"></th>
        </tr>
<?php
foreach($query_image as $row){
?>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['result']; ?></td>
<td colspan="3" style="text-align: center;">
  <a href="soil_type.php?image_id=<?=$row['id'];?>" class="button btn" style="background: #4f5847;color:white;">More</a>
  <a href="delete-result.php?id=<?=$row['id'];?>" class="button btn" style="background: #4f5847;color:white;">Delete</a>
</td>
</tr>
<tr style="height: 10px;background:#7b8275">

</tr>
<?php
}
?>
    </table>
  </div>
</div>
    </div>
  </section>
</div>
  <!--  -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>  
      <script>
              const hamBurger = document.querySelector(".toggle-btn");
            hamBurger.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("expand");
            });
    </script>
</body>

</html>