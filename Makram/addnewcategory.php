<?php
require 'header2.php';
if(isset($_SESSION['id'],$_SESSION['privilege'])){
	$userid = $_SESSION['id'];
  ?>
  <div class="col-md-12">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
	<div class="close_report">
  <div class="settings_parent ">
		<div class="closing">
      <form action="addnewcategorydata.php" method="POST" name="addcategoryform" onsubmit="return validateaddcategory();">
        <input type="text" name="categoryname" class="inputtext categoryname addnewiteminput" placeholder="Category Name"/>
        <input type="submit"  name="submit" value="APPLY" class="button2" />
      </form>
		</div>
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
