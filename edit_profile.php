<?php
include("conn.php");
$id = $_SESSION['id'];
$sql_user = "SELECT * FROM users WHERE id = $id";
$query_user = mysqli_query($conn,$sql_user);
foreach($query_user as $row){
  $f_name_ =  $row['fullname'];
  $u_name_ =  $row['username'];
  $email_ = $row['email'] ;
  $phone_ = $row['phone'] ;
  $image_ = $row['image'] ;
  $password_ =  $row['password'];
}

if (isset($_POST['logout_btn'])) {
  include('logout.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Update Profile </title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->

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
.edit-profile{
  width: 100%;
  height: 100vh;
}

.main-box-edit{
    padding: 30px 60px;
}

.box-title h2{
  color:#4F5847;
  padding-bottom: 5px;
  text-decoration: underline;
}


.box-info{
display: flex;
justify-content: space-between;
align-items: center;
}

.box-profile{
  display: flex;
  justify-content: start;
  gap: 20px;
}

.box-profile img {
  border-radius: 50%;
  width: 90px;
  height: 90px;
  border: 2px solid #BEE97B;
}
.edit-info{
  width: 25%;
}
.edit-btn  {
  background-color: #224D2C;
  padding: 3px 8px;
  border-radius: 8px;
  width: 100%;
  transition: all .5s ease;
}

a .edit-btn  {
  text-decoration: none;
  color:#fff;
}

a:hover .edit-btn {
  text-decoration: underline;
}

/* التنسيق الخاص بـ التوافق مع الشاشات */

@media(max-width:1399px){

}

@media(min-width:768px)and (max-width:992px){

}

@media(max-width:768px) {
.box-profile img {
    border-radius: 50%;
    width: 50px;
    height: 55px;
    border: 2px solid #BEE97B;
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



@media(max-width:568px){
  .box-profile img {
    border-radius: 50%;
    width: 50px;
    height: 55px;
    border: 2px solid #BEE97B;
  }

  .title-info h3 {
  font-size: 14px;
  color: #000;
  }

  .title-info h6 {
      font-size: 12px;
      color: gray;
  }

  .main-box-edit {
    padding: 20px 0px !important;
  }
 .box-title{
    padding: 0px !important;
  }
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

<section class="edit-profile">
  <div class="container-fluid">
    <div class="main-box-edit">
      <div class="box-title p-5">
        <h2>Account Setting</h2>
      </div>
      <div class="row pt-5 mb-5">
        <div class="col-lg-12">
          <div class="box-info">

        <div class="box-profile pt-5 pb-5">
              <img src="./images/<?= $image_; ?>" alt="">
            <div class="title-info">
              <h3><?= $u_name_; ?></h3>
              <h6><?= $email_; ?></h6>
            </div>

        </div>
            <!--  -->

              <div class="edit-info pe-4">
              <a style="color: white;" href="update_profile.php"><button class="edit-btn">EDIT</button></a>
            </div>

          </div>
        </div>
        <!--  -->
      <form action="edit_profile.php" method="post" enctype="multipart/form-data" style="width: 100%;">
        <div class="row">
          <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="FullName" class="form-label">FULL Name</label>
              <input type="text" class="form-control" id="FullName" placeholder="name@example.com" value="<?=$f_name_; ?>" required>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="UserName" class="form-label">User Name</label>
              <input type="text" class="form-control" id="UserName" placeholder="user name" value="<?=$u_name_; ?>" required>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input type="email" class="form-control" id="Email" placeholder="name@example.com" value="<?=$email_; ?>" required>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="PhoneNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="PhoneNumber" placeholder="user name" value="<?= $phone_; ?>">
            </div>
          </div>
        </div>
      </form>
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