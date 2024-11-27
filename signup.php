<?php

include("conn.php");
$status = 0;
$content = "";
if (isset($_POST['signup_btn'])) {
  $f_name =  $_POST['f_name'];
  $u_name =  $_POST['u_name'];
  $phone =  $_POST['phone'];
  $email = $_POST['email'];
  $password =  $_POST['password'];
  // $path=$_FILES['image']['name'];
  $sql_email = "SELECT * FROM users WHERE email like '$email'";
  $query_email = mysqli_query($conn, $sql_email);
  $count_email = mysqli_num_rows($query_email);
 if($count_email != 0 )
{
  $status = -1;
  $content = "email already existed";

}
else{
  $sql_uname = "SELECT * FROM users WHERE username like '$u_name'";
  $query_uname = mysqli_query($conn, $sql_uname);
  $count_uname = mysqli_num_rows($query_uname);
  if($count_uname != 0 )
  {
    $status = -2;
    $content = "user name already existed";
  }
}

// if (move_uploaded_file($_FILES['image']['tmp_name'], "images/".$path)) {
// }
if($status == 0){

  $sql = "INSERT INTO users(`fullname`,`username`,`email`,`password`,`phone`) VALUES('$f_name','$u_name','$email','$password','$phone')";
  $query = mysqli_query($conn, $sql);
  $_SESSION['id'] = mysqli_insert_id($conn);
  header("location:update_profile.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Sign Up </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

</head>

<body>

  <section class="sigup-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5">
          <div class="signup-box">
            <div class="siginup-title">
              <h1>Get Started Now</h1>
            </div>  
            <h3 style="text-align: center;"> <?= $content ?> </h3>
          <div class="box-input">
            <form action="signup.php" method="post" enctype="multipart/form-data">
            <div class="m-2">
              <label style="color: #ffffff;font-weight:bold" for="f_name">Full name</label>
              <input class="form-control" name="f_name" id="f_name" type="text" placeholder="Enter your name" required>
            </div>
            <div class="m-2">
              <label style="color: #ffffff;font-weight:bold" for="u_name">User name</label>
              <input class="form-control" name="u_name" id="u_name" type="text" placeholder="Enter your username" required>
            </div>
            <div class="m-2">
              <label style="color: #ffffff;font-weight:bold" for="email">E-mail address</label>
              <input class="form-control" id="email" name="email" type="email" pattern="[a-zA-Z0-9._%+\-]+@[a-z0-9.\-]+\.com$" placeholder="Enter your email" required>
            </div>
            <div class="m-2">
              <label style="color: #ffffff;font-weight:bold" for="email">Phone number</label>
              <input class="form-control" id="phone" name="phone" type="text" pattern="[0-9]{10,}" minlength="10" title="phone accepted number only with min length 10" placeholder="Enter your phone" required>
            </div>
            <div class="m-2">
              <label style="color: #ffffff;font-weight:bold" for="password">Password</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).[a-zA-Z0-9].{10,}"
              title="Must contain at least one  number and one uppercase and lowercase letter, and at least 10 or more characters" required>
            </div>
          
          <button name="signup_btn" type="submit" class="btn-main" style="color: #fff; background: #416D19;
        font-size: 1.2rem;font-weight: 500;letter-spacing: 1px;margin-top: 1.5rem;margin-bottom: 20px;
        cursor: pointer;transition: 0.4s;border-radius: 10px;width: 100%;height: 50px;padding: 10px;"
        >Sign up </button>
        <div class="or-style" style="text-align: center;">OR</div>
        <div class="signup-button">
          <span class="signup" >Have an account?
            <a href="login.php" style="color:#416D19;"> Login </a>
          </span>
        </div>
      </form>
    </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>