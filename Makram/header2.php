<?php
session_start();
require_once("functions.php");
date_default_timezone_set("Asia/Beirut");
?>
<head>
    <title> P.O.S </title>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1">
    <script src="jquery-2.1.4.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
      <a href="settings.php"><div class="back"><img src="image/back.png" class="backinage" /></div></a>
    </div>
    <div class="col-md-2">
      <a href="Home.php?id={$id}"><div class="logo1"><img src="image/logo.png" class="logoimage" /></div></a>
    </div>
    <div class="col-md-5">
    <a href="signout.php"><div class="logout1"><img src="image/logout.png" class="logoutimg" /></div></a>
    <a href="settings.php"><div class="settings1"><img src="image/settings.png" class="settingsimg" /></div></a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
