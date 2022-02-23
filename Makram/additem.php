<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  if(isset($_GET['itemid'],$_GET['invoiceid'])){
    $invoiceid = $_GET['invoiceid'];

    $q = "SELECT * from invoice where paid = 0 and id = '$invoiceid';";
    $r = mysql_query($q);
    confirm_query($r);
    if(mysql_num_rows($r) > 0){

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
      $insert = "INSERT INTO invoice(`id`,`date`,`time`,`user_id`,closing)
                         values('$i','$date','$time','$user_id','$closing');";
      $res = mysql_query($insert);
      confirm_query($res);
      $invoiceid = $i;
    }



    $itemid = $_GET['itemid'];
    $q="SELECT * from invoice_item where invoiceid = '$invoiceid' and itemid = '$itemid';";
    $r = mysql_query($q);
    confirm_query($r);
    if(mysql_num_rows($r)){
      $update = "UPDATE invoice_item set quantity=quantity+1 where itemid = '$itemid';";
      $res = mysql_query($update);
      confirm_query($res);
    }
    else {
      $insert = "INSERT INTO invoice_item (invoiceid,itemid,quantity) values('$invoiceid','$itemid','1');";
      $res=mysql_query($insert);
      confirm_query($res);
    }
    $q1="SELECT * from items where id='$itemid';";
    $r1=mysql_query($q1);
    confirm_query($r1);
    $info1 = mysql_fetch_array($r1);
    $price = $info1['price'];
    $catid = $info1['id'];
    $q2="SELECT total from invoice where id='$invoiceid';";
    $r2=mysql_query($q2);
    confirm_query($r2);
    $info2 = mysql_fetch_array($r2);
    // if($info2['total']==""){
    //   $total = $price;
    // }
    // else {
    // }
    // $discount = $info2['discount_amount'];
    // if($info2['discount']!="" && $info2['discount']!=0){
    //   $discount=$info2['discount_amount']+$price;
    //   $price=$info2['discount']+$price;
    // }
    $total = $info2['total']+$price;
    $q2="UPDATE invoice set total='$total' where id='$invoiceid';";
    $r2=mysql_query($q2);
    confirm_query($r2);
    echo "<script> location = 'home.php?id={$invoiceid}&catid={$catid}';</script>";
  }
  ?>

  <?php
}
else echo "<script> location = 'index.php';</script>";
?>
