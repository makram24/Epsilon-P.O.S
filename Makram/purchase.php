<?php
require 'header2.php';
if(isset($_SESSION['id'],$_SESSION['privilege'])){
	$userid = $_SESSION['id'];
 ?>
 <div class="purchasetable">
<div class="col-md-12">
  <form action="purchasecreate.php" method="POST" name="addpurchaseinvoice" onsubmit="return validatenewpurchase();">
    <div class="col-md-4">
        <input type="number" name="orderid" class="purchase2 orderid " placeholder="order id" />
      </div>
      <div class="col-md-8">
        <input type="text" name="customername" class="purchase2 customername " placeholder="customer name" />
      </div>
          </div>
      <div class="col-md-12">
        <table class="tablepur">
          <tr>
            <td class="purcahsetable">barcode</td>
            <td class="purcahsetable">item name</td>
            <td class="purcahsetable quantity">quantity</td>
            <td class="purcahsetable price">price</td>
            <td class="purcahsetable actualamount">amount</td>
            <td class="purcahsetable tax ">tax1 rate</td>
            <td class="purcahsetable tax ">tax1 amount</td>
            <td class="purcahsetable tax ">tax2 rate</td>
            <td class="purcahsetable tax ">tax2 amount</td>
            <td class="purcahsetable tax ">tax3 rate</td>
            <td class="purcahsetable tax ">tax3 amount</td>
            <td class="purcahsetable actualamount">final amount</td>
          </tr>
      <tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
			<tr>
        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
        <td><input type="number" name="price" class="purchase1 price "/></td>
        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
      </tr>
    </table>
    <input type="submit"  name="submit" value="APPLY" class="button2" />
  </form>
</div>
</div>
<?php
if(isset($_GET['add']) && $_GET['add']== "true"){
  echo "<div class=\"success\">Successfully Added</div>";
}
}
else echo "<script> location = 'index.php';</script>";
?>
