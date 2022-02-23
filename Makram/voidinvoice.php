<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_GET['invoiceid'])){
    $invoiceid = $_GET['invoiceid'];
    $delete = "DELETE from invoice_item where invoiceid = '$invoiceid';";
    $del = mysql_query($delete);
    confirm_query($del);
    $delete = "DELETE from invoice where id = '$invoiceid';";
    $del = mysql_query($delete);
    confirm_query($del);
    echo "<script> location = 'Home.php';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
