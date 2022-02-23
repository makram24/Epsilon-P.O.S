<?php
function php_func(){
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
  echo "<script> location ='Home.php?id={$id}';</script>";
}
} ?>
