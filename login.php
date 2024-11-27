<?php
include("conn.php");
$status = 0;
$message="";
if (isset($_POST['login_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE ((email like '$email' OR username like '$email') AND password like '$password')";
  $query = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($query);
  
  if($count == 0)
  {
    $status = -1;
    $message = "login failed, check your email and password";
  }

  else

  {
    if($status == 0) {
    foreach($query as $row){
      $_SESSION['id'] = $row['id'];
      $_SESSION['type'] = $row['type'];
    }
    header("location:home.php");
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
  
  <section class="login-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5">
          <div class="login-box">
            <input type="checkbox" id="check">
        <div class="login-title">
          <h1>Welcome Back!</h1>
        </div>
          <div style="color:red">
            <h3 style="text-align: center;"> <?= $message; ?> </h3>
          </div>
              <div class="box-input">
                <form action="login.php" method="post">
                  <div class="m-2">
                    <label style="color: #ffffff;font-weight:bold" for="email">E-mail or usename</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Enter your email or username" required>
                  </div>
                  
                  <div class="m-2">
                  <label style="color: #ffffff;font-weight:bold" for="password">Password</label>
                  <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).[a-zA-Z0-9].{10,}"
                  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 10 or more characters" required>
                  </div>

                  
                  <button name="login_btn" type="submit" class="btn-main" style="color: #fff; background: #416D19;"> login </button>
                  <div class="or-style" style="text-align: center;">OR</div>
                  <div class="signup-button">
                    <span class="signup"> Don't have an account?
                      <a href="signup.php" style="color:#416D19;"> Sign up </a>
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