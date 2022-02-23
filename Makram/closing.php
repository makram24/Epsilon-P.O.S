<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  $closing = 0;
    $q="SELECT * FROM invoice WHERE paid = 1 and block = 0;";
    $r = mysql_query($q);
    confirm_query($r);
    while ($row = mysql_fetch_array($r)) {
      $closing = $row['closing'];
      $closing++;
      $update = "UPDATE invoice set block = 1 , closing = '$closing' where paid = 1 and block = 0;";
        $res = mysql_query($update);
        confirm_query($res);
    }
    $_SESSION['closing'] = $closing;
    echo "<script> location = 'settings.php';</script>";
  }
else echo "<script> location = 'index.php';</script>";
?>
