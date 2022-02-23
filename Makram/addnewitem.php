<style>
.inputtext{
  margin-top: 2%;
  }</style>
<?php
require 'header2.php';
if(isset($_SESSION['id'],$_SESSION['privilege'])){
	$userid = $_SESSION['id'];
	// $username = $_SESSION['user_name'];
	$year = date('Y');
	$month = date('m');
  ?>
  <div class="col-md-12">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  <div class="settings_parent ">
		<div class="closing">
      <form action="addnewitemdata.php" method="POST" name="additemform" onsubmit="return validateadditem();">
        <input type="text" name="itemname" class="inputtext itemname addnewiteminput" placeholder="Product Name*"/>
        <input type="number" name="itemprice" class="inputtext itemprice addnewiteminput" placeholder="Product Price*"/>
        <select name="categoryid" class="inputtext categoryid addnewiteminput">
          <option value='' style="opacity:0.5;" disabled='disabled' selected='selected'>Select Category</option>
          <?php
            $q = "SELECT * from category order by cat_name asc;";
            $r = mysql_query($q);
            confirm_query($r);
            while($info = mysql_fetch_array($r)){
              echo "<option value=\"{$info['id']}\" >{$info['cat_name']}</option>";
            }
          ?>
        </select>
        <input type="number" name="boxprice" class="inputtext itempricepak addnewiteminput" placeholder="Product Price box"/>
        <input type="text" name="itemBarcode" class="inputtext itemBarcode addnewiteminput" placeholder="Product Barcode*"/>
        <input type="number" name="boxquantity" class="inputtext itemQuantityofbox addnewiteminput" placeholder="Quantity of product in box"/>
        <input type="submit"  name="submit" value="APPLY" class="button2" />
      </form>
		</div>
  </div>
</div>
  <div class="col-md-4">
  </div>
</div>
  <?php
  if(isset($_GET['add']) && $_GET['add']== "true"){
    echo "<div class=\"success\">Successfully Added</div>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
