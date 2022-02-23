<?php
require 'header1.php';
if(isset($_POST['submit'])){
  // $username = $_POST['username'];
  $password = $_POST['password'];
  // $q="SELECT * from manager where username = '$username' && password = '$password' ;";
  $q="SELECT * from manager where password = '$password' ;";
  $r=mysql_query($q);
  confirm_query($r);
  if(mysql_num_rows($r)>0){
    $info = mysql_fetch_array($r);
    // $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['privilege']=$info['privilege'];
    $_SESSION['id']=$info['id'];
    $_SESSION['casherid']=$info['id'];
    $zero = 0;
    $_SESSION['paidid']= $zero;
    $user_id = $info['id'];
    $q = "SELECT * from invoice where paid =0 and block = 0;";
    $r = mysql_query($q);
    confirm_query($r);
    if(mysql_num_rows($r) > 0){
      $info = mysql_fetch_array($r);
      $id = $info['id'];
      $closing = $info['closing'];
    }
    else{
      $date = date('Y-m-d');
      $hour = date('H')+4;
      $min = date('i');
      $time = "{$hour}:{$min}";
      $q = "SELECT * FROM invoice order by id desc;";
      $r = mysql_query($q);
      confirm_query($r);
      $i = 0;
      $info = mysql_fetch_array($r);
      if(mysql_num_rows($r) > 0){
        $i = $info['id'];
        $closing = $info['closing'];
      }
      $i++;
      $insert = "INSERT INTO invoice(id,`date`,`time`,user_id ,closing)
                         values('$i','$date','$time','$user_id','$closing');";
      $res = mysql_query($insert);
      confirm_query($res);
      $id = $i;
    }
    echo "<script> location ='Home.php?id={$id}';</script>";
  }
  else {
    echo "<script> location = 'index.php?error=no';</script>";
  }
      $_SESSION['closing']=$closing;
}
else echo "<script> location = 'index.php';</script>";
?>
