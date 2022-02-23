<div class="addcontainer">
<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  if(isset($_POST['paidbtn'])){
    // $casherid =$_POST['idchash'];
    $_SESSION['paidid']=$_POST['paid'];
    echo "<script> location = 'settings.php';</script>";
    }
  }
else echo "<script> location = 'index.php';</script>";
?>
</div>
