<?php
require 'header2.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $itemname = $_POST['itemname'];
    $itemprice = $_POST['itemprice'];
    $categoryid = $_POST['categoryid'];
    $boxprice = $_POST['boxprice'];
    $itemBarcode = $_POST['itemBarcode'];
    $boxquantity = $_POST['boxquantity'];
    $q="SELECT * from items order by id desc limit 1;";
    $r=mysql_query($q);
    confirm_query($r);
    $i=0;
    if(mysql_num_rows($r)>0){
      $info=mysql_fetch_array($r);
      $i = $info['id'];
    }
    $i++;
    $insert = "INSERT INTO items (id,item_name,price,cat_id,box_price,Barcode,box_quantity) values ('$i','$itemname','$itemprice','$categoryid','$boxprice','$itemBarcode','$boxquantity');";
    $res = mysql_query($insert);
    confirm_query($res);
    echo "<script> location = 'settings.php?add=true';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
