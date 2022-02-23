<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $discountinput = $_POST['discountinput'];
    if(isset($_GET['invoiceid'])){
      $invoiceid = $_GET['invoiceid'];
    }
    $q="SELECT * from invoice where id='$invoiceid';";
    $r=mysql_query($q);
    confirm_query($r);
    $info=mysql_fetch_array($r);
    if($info['discount']!=""){
      $total = $info['total']+$info['discount_amount'];
    }
    else {
      $total = $info['total'];
    }
    $discount = $total * $discountinput/100;
    $newtotal = $total - $discount;
    $update = "UPDATE invoice set total = '$newtotal' , discount = '$discountinput',discount_amount = '$discount' where id = '$invoiceid';";
    $res = mysql_query($update);
    confirm_query($res);
    echo "<script> location = 'Home.php?id={$invoiceid}';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
