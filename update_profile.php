<?php
include("conn.php");
$status = 0;
$content = "";
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


if(isset($_POST['update_btn']))
{
  $f_name =  $_POST['f_name'];
  $u_name =  $_POST['u_name'];
  $email = $_POST['email'] ;
  $phone =  $_POST['phone'];
  $path=$_FILES['image']['name'];

  $sql_email = "SELECT * FROM users WHERE (email like '$email' AND id != $id) ";
  $query_email = mysqli_query($conn, $sql_email);
  $count_email = mysqli_num_rows($query_email);
 if($count_email != 0 )
{
  $status = -1;
  $content = "email already existed";

}
else{
  $sql_uname = "SELECT * FROM users WHERE (username like '$u_name' AND id != $id)";
  $query_uname = mysqli_query($conn, $sql_uname);
  $count_uname = mysqli_num_rows($query_uname);
  if($count_uname != 0 )
  {
    $status = -2;
    $content = "user name already existed";
  }
}
if($status  == 0){

  if (move_uploaded_file($_FILES['image']['tmp_name'], "images/".$path)) {
    $sql = "UPDATE users SET `fullname`='$f_name',`username`='$u_name',`email`='$email',`phone`='$phone',`image`='$path' WHERE id =$id ";
    $query = mysqli_query($conn,$sql);
  
  }
else{
  $sql = "UPDATE users SET `fullname`='$f_name',`username`='$u_name',`email`='$email',`phone`='$phone' WHERE id =$id ";
  $query = mysqli_query($conn,$sql);
}
  header("location:edit_profile.php");
}
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
    height: auto;
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
  justify-content: space-between;
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
.update-button{
  display: flex;
  justify-content: end;
}

.btn-update{
  background-color: #224D2C;
  padding: 3px 8px;
  border-radius: 8px;
  width: 25%;
  color: #fcfcfc;
  transition: all .5s ease;
}

.edit-btn a {
  text-decoration: none;
  color:#fff;
}

.edit-btn:hover a{
  text-decoration: underline;
}

.upload{
  width: 100px;
  position: relative;
  margin: auto;
}

.upload img{
  border-radius: 50%;
  border: 2px solid #4F5847;
}

.upload .round{
  position: absolute;
  bottom: 0;
  right: 0;
  background: #224D2C;
  width: 32px;
  height: 32px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
}

.upload .round input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
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
  .box-title{
    padding: 0px !important;
  }

  .edit-btn{
    width: 76px !important;
  }

  .edit-btn a {
    font-size: 12px;
  }

  .main-box-edit{
    padding: 20px 0px  !important;
  }

.btn-update {
  font-size: 12px;
}

  .upload img {
    width: 110px;
    height: auto;
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
      <form action="update_profile.php" method="post" enctype="multipart/form-data">
      <div class="row pt-5 mb-5">
        <div class="col-lg-12">
      <div class="box-info">
        <div class="box-profile pt-5 pb-5">
            <div class="upload">
                  <img src="./images/<?= $image_; ?>" width = 100 height = 100 alt="">
                <div class="round">
                  <label for="image"><i class="lni lni-upload " style="color:#fcfcfc;"></i></label>
                  <input  id="image" name="image" type="file"  accept="image/*">
                </div>
            </div>
        </div>
            <!--  -->
            <div class="edit-info pe-4">
              <button class="edit-btn" style="color: white;"><a href="delete-image.php"> Delete Image</a> </button>
          </div>
      </div>
    </div>
        <!--  -->
        <div class="row">
          <!--  -->
          <h3 style="text-align: center;"> <?= $content ?> </h3>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="FullName" class="form-label">FULL Name</label>
              <input class="form-control" name="f_name" id="FullName" type="text" placeholder="Enter your name" value="<?=$f_name_; ?>" required>
            </div>
          </div>
            <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="UserName" class="form-label">User Name</label>
              <input class="form-control" name="u_name" id="UserName" type="text" placeholder="Enter your username" value="<?=$u_name_; ?>" required>
            </div>
          </div>
        </div>
        <!--  -->
            <div class="row">
          <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="Email" class="form-label">Email</label>
              <input class="form-control" id="Email" name="email" type="email" placeholder="Enter your email" value="<?=$email_; ?>" pattern="[a-zA-Z0-9._%+\-]+@[a-z0-9.\-]+\.com$"  required>
            </div>
          </div>
            <!--  -->
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="PhoneNumber" class="form-label">Phone Number</label>
              <input class="form-control" type="text" pattern="[0-9]{10,}" minlength="10" title="phone accepted number only with min length 10" id="phone" name="phone" placeholder="Enter your phone" value="<?= $phone_; ?>" required>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-lg-12 pt-5 mt-5">
            <div class="update-button">
              <button name="update_btn" type="submit" class="btn-update"> Update Profile</button>
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