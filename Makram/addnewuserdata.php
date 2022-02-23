<?php
require 'header2.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $privilege = $_POST['privilege'];
    $q="SELECT * from manager order by id desc limit 1;";
    $r=mysql_query($q);
    confirm_query($r);
    $i=0;
    if(mysql_num_rows($r)>0){
      $info=mysql_fetch_array($r);
      $i = $info['id'];
    }
    $i++;
    $insert = "INSERT INTO manager (id,username,password,privilege) values ('$i','$username','$password','$privilege');";
    $res = mysql_query($insert);
    confirm_query($res);
    echo "<script> location = 'settings.php?add=true';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
