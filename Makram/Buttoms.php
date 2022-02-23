<div class="controls shadowout">
  <div id="input_container">
  <input type="text" class="search" name="itemsearch" placeholder="Search">
    <input type="image" src="image/search.png" class="input_img savebtn" name="submit" value="search"  onclick="return searchitem();">
</div>
<!-- <input type="button" class="controlbotton" name="Hold" value="Hold" placeholder="Hold"> -->
  <div class="controlbotton" onclick="">Hold</div>
  <div class="controlbotton" onclick="">Recoll</div>
  <div class="controlbotton Addbuttom"  >Add</div>
  <div class="controlbotton" onclick="">Less</div>
  <div class="controlbotton" onclick="printDiv('printableArea')">Print</div>
  <?php
    $q5="SELECT * from invoice where id = '$invoiceid';";
    $r5=mysql_query($q5);
    confirm_query($r5);
    $info5 = mysql_fetch_array($r5);
    if($info5['paid']!="1"){
      ?>
      <div class="controlbotton paid">Paid</div>
      <?php if($_SESSION['privilege']=="administrator"){

        echo "<div class=\"controlbotton voiditem\">VOID</div><input type=\"submit\" name=\"submit\" value=\"VOID\" class=\"button3\" />";

      }?>
      <div class="controlbotton discount">Discount</div>
      <?php
    }
    ?>
    <div class="addbuttominput1 centervh  ">
    <form action="additem.php?invoiceid=<?php echo $invoiceid;?>&itemid=<<?php echo $info4['id']?>" method="POST" name="addbuttomform" onsubmit="return validateaddbuttom();">
      <input type="number" name="addbuttominput" class="inputtext3 addbuttominput" placeholder="Add number" /></br>
      <input type="submit"  name="submit" value="APPLY" class="button4" />
    </form>
    </div>

<div class="paymentmethod centervh  ">
<a href="payment.php?id=<?php echo $invoiceid;?>&method=cach"><div class="controlbotton1">Cach</div></a>
<a href="payment.php?id=<?php echo $invoiceid;?>&method=creditcard"><div class="controlbotton1">Credit Card</div></a>
<?php if($_SESSION['privilege']=="administrator"){
echo "<a href=\"payment.php &method=AandG\"><div class=\"controlbotton1\">On Account</div></a>";
}?>
</div>
<div class="discountsec  centervh  ">
<form action="dicount.php?invoiceid=<?php echo $invoiceid;?>" method="POST" name="discountform" onsubmit="return validatediscount();">
  <input type="number" name="discountinput" class="inputtext3 discountinput" placeholder="Discount %" value="<?php echo $info5['discount'];?>"/></br>
  <input type="submit"  name="submit" value="APPLY" class="button4" />
</form>
</div>
</div>
</div>
<?php

// else echo "<script> location = 'index.php';</script>";
?>
