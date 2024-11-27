<?php
if (isset($_POST['logout_btn'])) {
  include('logout.php');
}
?>

<head>
  <style>
    .row {
      margin-left: 0px !important;
      margin-right: 0px !important;
    }

    .navbar {
      width: 100%;
      background-color: #0a3473;
      overflow: auto;
    }

    .navbar a {
      float: right;
      padding: 10px;
      color: white;
      text-decoration: none;
      font-size: 10px;
    }

    body {
      margin: 0;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 21%;
      background-color: #3e6346;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    li a {
      display: block;
      color: #fff;
      padding: 8px 25px;
      text-decoration: none;
      font-size: larger;
    }

    li a.active {
      color: white;
      text-decoration: none;

    }

    li a:hover:not(.active) {
      text-decoration: none;
      background-color: #009579;
      color: white;
    }

    i {
      color: #fff;
    }
  
  
  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

  <head>


<ul>
  <li> <a href="home.php" style="margin-top: 0em;text-align: center;;">  <img src="images/white.png" width="100" height="40"> </a> </li>
  <li> <a  href="update_profile.php" style="margin-top: 0em;"> <i class="fa fa-user" aria-hidden="true"></i> profile </a> </li>
  <li> <a  href="planting_records.php" style="margin-top: 0em;"> <i class="fa fa-adjust" aria-hidden="true"></i> planting record </a> </li>

  <!-- logout  -->
  <li><a href="logout.php" style="position:fixed;bottom:0;width:20%">
      <i class="fa fa-sign-out" aria-hidden="true"></i>
      Logout </a></li>


</ul>


<div style="margin-left:21%;height:100vh;">