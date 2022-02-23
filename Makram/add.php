<div class="addcontainer">
<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  if(isset($_POST['addbtn'])){
    $qantity =$_POST['addbuttominput'];
    $invoiceid =$_POST['invoiceidd'];
    $invoice_item_id =$_POST['idtt'];
    // echo $qantity;
    // echo $invoice_item_id;
    $q="SELECT * from invoice_item where invoiceid = '$invoiceid' and invoice_item_id = '$invoice_item_id';";
    $r = mysql_query($q);
    confirm_query($r);
    if(mysql_num_rows($r)){
      $update = "UPDATE invoice_item set quantity = quantity+'$qantity' where invoice_item_id = '$invoice_item_id';";
      $res = mysql_query($update);
      confirm_query($res);


    $q1="SELECT * from items a ,invoice_item b where b.invoice_item_id = '$invoice_item_id' and b.itemid = a.id;";
    $r1=mysql_query($q1);
    confirm_query($r1);
    $info1 = mysql_fetch_array($r1);
    $price = $info1['price'];
    $quan = $info1['quantity'];
    // $q2="SELECT total from invoice where id='$invoiceid';";
    // $r2=mysql_query($q2);
    // confirm_query($r2);
    // $info2 = mysql_fetch_array($r2);
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
    $total = $price * $quan;
    echo $total;
    $q2="UPDATE invoice set total = total+'$total' where id='$invoiceid';";
    $r2=mysql_query($q2);
    confirm_query($r2);
    echo "<script> location = 'Home.php?id={$invoiceid}';</script>";
    }
  }
}
else echo "<script> location = 'index.php';</script>";
?>
</div>
