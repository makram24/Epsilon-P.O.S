<!-- <div class="specialpreperation centervh">
  <form action="addnewitem.php?invoiceid=<?php echo $invoiceid;?>" method="POST" name="additemform" onsubmit="return validateadditem();">

    <input type="text" name="itemname" class="inputtext itemname" placeholder="Item Name"/>
    <input type="number" name="itemprice" class="inputtext itemprice" placeholder="Item Price"/>
    <input type="submit"  name="submit" value="APPLY" class="button5" />
  </form>
</div> -->

<style>
.inputtext{
  margin-top: 2%;
  }</style>
<?php
require 'header2.php';
if(isset($_SESSION['id'],$_SESSION['privilege']) && $_SESSION['privilege']=="administrator"){
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
      <form action="addnewuserdata.php" method="POST" name="adduserform" onsubmit="return validateadduser();">

        <input type="text" name="username" class="inputtext username addnewiteminput" placeholder="Usename"/>
        <input type="number" name="password" class="inputtext password addnewiteminput" placeholder="Password"/>
        <select name="privilege" class="inputtext privilege addnewiteminput">
          <option value='' style="opacity:0.5;" disabled='disabled' selected='selected'>Select Privilege</option>
          <option value="administrator">Administrator</option>
          <option value="user">User</option>
        </select>
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
