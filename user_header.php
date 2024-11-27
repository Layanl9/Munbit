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
    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto auto auto;
      background-color: rgb(41, 85, 24);
      padding: 0px;
    }

    .grid-item {
      background-color: rgb(41, 85, 24);
      padding: 1px;
      font-size: 20px;
      text-align: center;
      color: #fff;
    }

    .row {
      margin-left: 0px !important;
      margin-right: 0px !important;
    }

    .navbar {
      width: 100%;
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

  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<form action="header.php" method="post">
  <div class="navbar row justify-content-end">
  <div class="row">

    <div style="width: 100%" dir="rtl">
    <a  href="edit_profile.php" style="margin-top: 0.5em;"> profile </a>
    <a  href="chatbot.php" style="margin-top: 0.5em;"> Chatbot </a>
    <a  href="services.php" style="margin-top: 0.5em;">Services </a>
    <a  href="home.php#about" style="margin-top: 0.5em;"> About </a>
    <a  href="home.php" style="margin-top: 0.5em;"> Home </a>
 
    </div>

    </div>
  </div>
</form>