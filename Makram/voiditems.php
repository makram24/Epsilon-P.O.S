<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $items = $_POST['voiditems'];
    if(isset($_GET['id'])){
      $invoiceid = $_GET['id'];
    }
  if($_SESSION['privilege']=="user"){
    $reason = $_POST['voidreason'];
    foreach ($items as $key => $value) {
      $invoice_item_id = $value;
      $q="SELECT * from invoice_item a,items b where invoice_item_id = '$invoice_item_id' and a.itemid = b.id;";
      $r=mysql_query($q);
      confirm_query($r);
      $info = mysql_fetch_array($r);
      $quantity = $info['quantity'];
      $price = $info['price'];
      $total = $quantity*$price;
      $update = "UPDATE invoice set total=total-$total where id = '$invoiceid';";
      $res = mysql_query($update);
      confirm_query($res);
      $delete = "UPDATE invoice_item set voidreason = '$reason', quantity = 0 , voidquantity = '$quantity' where invoice_item_id = '$invoice_item_id';";
      $del = mysql_query($delete);
      confirm_query($del);
    }
    echo "<script> location = 'Home.php?id={$invoiceid}';</script>";
    }
    else {
    foreach ($items as $key => $value) {
      $invoice_item_id = $value;
      $q="SELECT * from invoice_item a,items b where invoice_item_id = '$invoice_item_id' and a.itemid = b.id;";
      $r=mysql_query($q);
      confirm_query($r);
      $info = mysql_fetch_array($r);
      $quantity = $info['quantity'];
      $price = $info['price'];
      $total = $quantity*$price;
      $update = "UPDATE invoice set total=total-$total where id = '$invoiceid';";
      $res = mysql_query($update);
      confirm_query($res);
      $delete = "DELETE from invoice_item where invoice_item_id = '$invoice_item_id';";
      $del = mysql_query($delete);
      confirm_query($del);
    }
    echo "<script> location = 'Home.php?id={$invoiceid}';</script>";
  }
}
}
else echo "<script> location = 'index.php';</script>";
?>
