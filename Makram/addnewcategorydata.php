<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $categoryname = $_POST['categoryname'];
    $q="SELECT * from category order by id desc limit 1;";
    $r=mysql_query($q);
    confirm_query($r);
    $i=0;
    if(mysql_num_rows($r)>0){
      $info=mysql_fetch_array($r);
      $i = $info['id'];
    }
    $i++;
    $insert = "INSERT INTO category (id,cat_name) values ('$i','$categoryname');";
    $res = mysql_query($insert);
    confirm_query($res);
    echo "<script> location = 'settings.php?add=true';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
