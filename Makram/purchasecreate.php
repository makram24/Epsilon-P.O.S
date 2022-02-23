<?php
require 'header2.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $orderid = $_POST['orderid'];
    $customername = $_POST['customername'];
    $barcode = $_POST['barcode'];
    $itemnname = $_POST['itemnname'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $actualamount = $_POST['actualamount'];
    $tax1rate = $_POST['tax1rate'];
    $tax1amount = $_POST['tax1amount'];
    $tax2rate = $_POST['tax2rate'];
    $tax2amount = $_POST['tax2amount'];
    $tax3rate = $_POST['tax3rate'];
    $tax3amount = $_POST['tax3amount'];
    $finalamount = $_POST['finalamount'];

    $barcode1 = $_POST['barcode1'];
    $itemnname1 = $_POST['itemnname1'];
    $quantity1 = $_POST['quantity1'];
    $price1 = $_POST['price1'];
    $actualamount1 = $_POST['actualamount1'];
    $tax1rate1 = $_POST['tax1rate1'];
    $tax1amount1 = $_POST['tax1amount1'];
    $tax2rate1 = $_POST['tax2rate1'];
    $tax2amount1 = $_POST['tax2amount1'];
    $tax3rate1 = $_POST['tax3rate1'];
    $tax3amount1 = $_POST['tax3amount1'];
    $finalamount1 = $_POST['finalamount1'];

    $barcode2 = $_POST['barcode2'];
    $itemnname2 = $_POST['itemnname2'];
    $quantity2 = $_POST['quantity2'];
    $price2 = $_POST['price2'];
    $actualamount2 = $_POST['actualamount2'];
    $tax1rate2 = $_POST['tax1rate2'];
    $tax1amount2 = $_POST['tax1amount2'];
    $tax2rate2 = $_POST['tax2rate2'];
    $tax2amount2 = $_POST['tax2amount2'];
    $tax3rate2 = $_POST['tax3rate2'];
    $tax3amount2 = $_POST['tax3amount2'];
    $finalamount2 = $_POST['finalamount2'];

    $barcode3 = $_POST['barcode3'];
    $itemnname3 = $_POST['itemnname3'];
    $quantity3 = $_POST['quantity3'];
    $price3 = $_POST['price3'];
    $actualamount3 = $_POST['actualamount3'];
    $tax1rate3 = $_POST['tax1rate3'];
    $tax1amount3 = $_POST['tax1amount3'];
    $tax2rate3 = $_POST['tax2rate3'];
    $tax2amount3 = $_POST['tax2amount3'];
    $tax3rate3 = $_POST['tax3rate3'];
    $tax3amount3 = $_POST['tax3amount3'];
    $finalamount3 = $_POST['finalamount3'];

    $barcode4 = $_POST['barcode4'];
    $itemnname4 = $_POST['itemnname4'];
    $quantity4 = $_POST['quantity4'];
    $price4 = $_POST['price4'];
    $actualamount4 = $_POST['actualamount4'];
    $tax1rate4 = $_POST['tax1rate4'];
    $tax1amount4 = $_POST['tax1amount4'];
    $tax2rate4 = $_POST['tax2rate4'];
    $tax2amount4 = $_POST['tax2amount4'];
    $tax3rate4 = $_POST['tax3rate4'];
    $tax3amount4 = $_POST['tax3amount4'];
    $finalamount4 = $_POST['finalamount4'];

    $barcode5 = $_POST['barcode5'];
    $itemnname5 = $_POST['itemnname5'];
    $quantity5 = $_POST['quantity5'];
    $price5 = $_POST['price5'];
    $actualamount5 = $_POST['actualamount5'];
    $tax1rate5 = $_POST['tax1rate5'];
    $tax1amount5 = $_POST['tax1amount5'];
    $tax2rate5 = $_POST['tax2rate5'];
    $tax2amount5 = $_POST['tax2amount5'];
    $tax3rate5 = $_POST['tax3rate5'];
    $tax3amount5 = $_POST['tax3amount5'];
    $finalamount5 = $_POST['finalamount5'];

    $barcode6 = $_POST['barcode6'];
    $itemnname6 = $_POST['itemnname6'];
    $quantity6 = $_POST['quantity6'];
    $price6 = $_POST['price6'];
    $actualamount6 = $_POST['actualamount6'];
    $tax1rate6 = $_POST['tax1rate6'];
    $tax1amount6 = $_POST['tax1amount6'];
    $tax2rate6 = $_POST['tax2rate6'];
    $tax2amount6 = $_POST['tax2amount6'];
    $tax3rate6 = $_POST['tax3rate6'];
    $tax3amount6 = $_POST['tax3amount6'];
    $finalamount6 = $_POST['finalamount6'];

    $barcode7 = $_POST['barcode7'];
    $itemnname7 = $_POST['itemnname7'];
    $quantity7 = $_POST['quantity7'];
    $price7 = $_POST['price7'];
    $actualamount7 = $_POST['actualamount7'];
    $tax1rate7 = $_POST['tax1rate7'];
    $tax1amount7 = $_POST['tax1amount7'];
    $tax2rate7 = $_POST['tax2rate7'];
    $tax2amount7 = $_POST['tax2amount7'];
    $tax3rate7 = $_POST['tax3rate7'];
    $tax3amount7 = $_POST['tax3amount7'];
    $finalamount7 = $_POST['finalamount7'];

    $barcode8 = $_POST['barcode8'];
    $itemnname8 = $_POST['itemnname8'];
    $quantity8 = $_POST['quantity8'];
    $price8 = $_POST['price8'];
    $actualamount8 = $_POST['actualamount8'];
    $tax1rate8 = $_POST['tax1rate8'];
    $tax1amount8 = $_POST['tax1amount8'];
    $tax2rate8 = $_POST['tax2rate8'];
    $tax2amount8 = $_POST['tax2amount8'];
    $tax3rate8 = $_POST['tax3rate8'];
    $tax3amount8 = $_POST['tax3amount8'];
    $finalamount8 = $_POST['finalamount8'];

    $barcode9 = $_POST['barcode9'];
    $itemnname9 = $_POST['itemnname9'];
    $quantity9 = $_POST['quantity9'];
    $price9 = $_POST['price9'];
    $actualamount9 = $_POST['actualamount9'];
    $tax1rate9 = $_POST['tax1rate9'];
    $tax1amount9 = $_POST['tax1amount9'];
    $tax2rate9 = $_POST['tax2rate9'];
    $tax2amount9 = $_POST['tax2amount9'];
    $tax3rate9 = $_POST['tax3rate9'];
    $tax3amount9 = $_POST['tax3amount9'];
    $finalamount9 = $_POST['finalamount9'];

    $barcode10 = $_POST['barcode10'];
    $itemnname10 = $_POST['itemnname10'];
    $quantity10 = $_POST['quantity10'];
    $price10 = $_POST['price10'];
    $actualamount10 = $_POST['actualamount10'];
    $tax1rate10 = $_POST['tax1rate10'];
    $tax1amount10 = $_POST['tax1amount10'];
    $tax2rate10 = $_POST['tax2rate10'];
    $tax2amount10 = $_POST['tax2amount10'];
    $tax3rate10 = $_POST['tax3rate10'];
    $tax3amount10 = $_POST['tax3amount10'];
    $finalamount10 = $_POST['finalamount10'];

    $barcode11 = $_POST['barcode11'];
    $itemnname11 = $_POST['itemnname11'];
    $quantity11 = $_POST['quantity11'];
    $price11 = $_POST['price11'];
    $actualamount11 = $_POST['actualamount11'];
    $tax1rate11 = $_POST['tax1rate11'];
    $tax1amount11 = $_POST['tax1amount11'];
    $tax2rate11 = $_POST['tax2rate11'];
    $tax2amount11 = $_POST['tax2amount11'];
    $tax3rate11 = $_POST['tax3rate11'];
    $tax3amount11 = $_POST['tax3amount11'];
    $finalamount11 = $_POST['finalamount11'];

    $radio = $_POST['Paid1'];
    $total = $_POST['Total'];
    if ($radio == 'Paid' || $radio == 'paid' || $radio == 'PAID') {
      $paid = 1;
    }
    else {
      $paid = 0;
    }

    // $itembarcode = $_POST['order_item_barcode'];
    $date = date('Y-m-d');
    $hour = date('H')+4;
    $min = date('i');
    $time = "{$hour}:{$min}";
    if ($orderid == '' || $customername == '' || $total == '') {
          // echo "<p> orderid or customername are emptycells</p>";
          echo "<script> location = 'settings.php?add=false';</script>";
    }
    else{
      $q2 = "SELECT * FROM  pur_paid order by pur_id desc limit 1;";
      $r2 = mysql_query($q2);
      confirm_query($r2);
      $insert2 = "INSERT INTO pur_paid(pur_order_id	,	pur_paid)
                values('$orderid','$paid');";
      $res2 = mysql_query($insert2);
      confirm_query($res2);

      $q1 = "SELECT * FROM pur_order order by pur_id desc limit 1;";
      $r1 = mysql_query($q1);
      confirm_query($r1);
      $insert1 = "INSERT INTO pur_order(pur_order_id	,	pur_total)
                values('$orderid','$total');";
      $res1 = mysql_query($insert1);
      confirm_query($res1);

    $q = "SELECT * FROM pur_order_items order by order_item_id desc limit 1;";
    $r = mysql_query($q);
    confirm_query($r);
    $i = 0;
    while($info = mysql_fetch_array($r)){
      $i = $info['order_item_id'];
    }
    $i++;
    $i1 = $i + 1;
    $i2 = $i1 + 1;
    $i3 = $i2 + 1;
    $i4 = $i3 + 1;
    $i5 = $i4 + 1;
    $i6 = $i5 + 1;
    $i7 = $i6 + 1;
    $i8 = $i7 + 1;
    $i9 = $i8 + 1;
    $i10 = $i9 + 1;
    $i11 = $i10 + 1;
    $insert = "INSERT INTO pur_order_items(order_item_id,	order_id, customer_name, barcode, item_name, order_item_quantity, order_item_price, order_item_actual_amount, order_item_tax1_rate,order_item_tax1_amount,	order_item_tax2_rate, order_item_tax2_amount,order_item_tax3_rate,order_item_tax3_amount,order_item_final_amount)
                       values('$i','$orderid','$customername','$barcode','$itemnname','$quantity','$price','$actualamount','$tax1rate','$tax1amount','$tax2rate','$tax2amount','$tax3rate','$tax3amount','$finalamount') ,
                       ('$i1','$orderid','$customername','$barcode1','$itemnname1','$quantity1','$price1','$actualamount1','$tax1rate1','$tax1amount1','$tax2rate1','$tax2amount1','$tax3rate1','$tax3amount1','$finalamount1'),
                       ('$i2','$orderid','$customername','$barcode2','$itemnname2','$quantity2','$price2','$actualamount2','$tax1rate2','$tax1amount2','$tax2rate2','$tax2amount2','$tax3rate2','$tax3amount2','$finalamount2'),
                       ('$i3','$orderid','$customername','$barcode3','$itemnname3','$quantity3','$price3','$actualamount3','$tax1rate3','$tax1amount3','$tax2rate3','$tax2amount3','$tax3rate3','$tax3amount3','$finalamount3'),
                       ('$i4','$orderid','$customername','$barcode4','$itemnname4','$quantity4','$price4','$actualamount4','$tax1rate4','$tax1amount4','$tax2rate4','$tax2amount4','$tax3rate4','$tax3amount4','$finalamount4'),
                       ('$i5','$orderid','$customername','$barcode5','$itemnname5','$quantity5','$price5','$actualamount5','$tax1rate5','$tax1amount5','$tax2rate5','$tax2amount5','$tax3rate5','$tax3amount5','$finalamount5'),
                       ('$i6','$orderid','$customername','$barcode6','$itemnname6','$quantity6','$price6','$actualamount6','$tax1rate6','$tax1amount6','$tax2rate6','$tax2amount6','$tax3rate6','$tax3amount6','$finalamount6'),
                       ('$i7','$orderid','$customername','$barcode7','$itemnname7','$quantity7','$price7','$actualamount7','$tax1rate7','$tax1amount7','$tax2rate7','$tax2amount7','$tax3rate7','$tax3amount7','$finalamount7'),
                       ('$i8','$orderid','$customername','$barcode8','$itemnname8','$quantity8','$price8','$actualamount8','$tax1rate8','$tax1amount8','$tax2rate8','$tax2amount8','$tax3rate8','$tax3amount8','$finalamount8'),
                       ('$i9','$orderid','$customername','$barcode9','$itemnname9','$quantity9','$price9','$actualamount9','$tax1rate9','$tax1amount9','$tax2rate9','$tax2amount9','$tax3rate9','$tax3amount9','$finalamount9'),
                       ('$i10','$orderid','$customername','$barcode10','$itemnname10','$quantity10','$price10','$actualamount10','$tax1rate10','$tax1amount10','$tax2rate10','$tax2amount10','$tax3rate10','$tax3amount10','$finalamount10'),
                       ('$i11','$orderid','$customername','$barcode11','$itemnname11','$quantity11','$price11','$actualamount11','$tax1rate11','$tax1amount11','$tax2rate11','$tax2amount11','$tax3rate11','$tax3amount11','$finalamount11');";
    $res = mysql_query($insert);
    confirm_query($res);
    $delete = "DELETE FROM pur_order_items where item_name= '' ;";
    $res1 = mysql_query($delete);
    confirm_query($res1);
    echo "<script> location = 'settings.php?add=true';</script>";
  }
}
}
else echo "<script> location = 'index.php';</script>";
?>
