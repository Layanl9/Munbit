<?php
if (isset($_POST['logout_btn'])) {
  include('logout.php');
}
if (isset($_SESSION['type'])) {
  if ($_SESSION['type'] == 'employers') {
    $hide_employers = '';
    $hide_students = 'none';
  }
  if ($_SESSION['type'] == 'students') {
    $hide_employers = 'none';
    $hide_students = '';
  }
}
?>

<head>
  <style>
    .navbar {
      background-color: #fff;
      overflow: auto;
    }

    .navbar a {
      float: right;
      padding: 10px;
      width: 120px;
      color: black;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
    }

    .navbar a:hover {
      float: right;
      padding: 10px;
      width: 120px;
      color: #3e6346;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
    }


    /* start Navbar */
  @media (max-width:568px) and (min-width:568px) {
    .navbar-nav {
        align-items: center !important;
      }
      
    }
    
    @media (min-width:768px) {
    .navbar-nav {
        align-items: center !important;
    }
}

  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

    
<!-- Navbar is Here -->
<nav class="navbar navbar-expand-lg fixed-top " >
  <div class="container">
    <!-- image logo -->
    <a class="navbar-brand" href="home.php"><img src="./images/logo.png" alt="Logo"></a>
    <!-- button of mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Element of List -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li> -->
          <li class="nav-item">
          <a class="nav-link" href="chatbot.php">Chatbot</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="edit_profile.php">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <!-- Files of javaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    </body>