<?php
session_start();
require_once("functions.php");
date_default_timezone_set("Asia/Beirut");
// if(isset($_SESSION['id'])){
//   $id = $_SESSION['id'];
//   $username = $_SESSION['username'];
?>
<head>
    <title> P.O.S </title>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1">
    <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="script1.js" type="text/javascript"></script>
    <script src="validate.js" type="text/javascript"></script>
    <!-- <script src="auto-complete.js" type="text/javascript"></script> -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
  <div class="col-md-12 nopadding headerdiv ">
    <div class="col-md-5">
    </div>
    <div class="col-md-2">
      <a href="Home.php?id={$id}"><div class="logo1"><img src="image/logo.png" class="logoimage" /></div></a>
    </div>
    <div class="col-md-5">
    <a href="signout.php"><div class="logout1"><img src="image/logout.png" class="logoutimg" /></div></a>
    <a href="settings.php"><div class="settings1"><img src="image/settings.png" class="settingsimg" /></div></a>
    </div>
  </div>
</body>
