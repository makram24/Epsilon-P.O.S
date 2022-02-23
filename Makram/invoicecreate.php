<?php
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $date = date('Y-m-d');
    $hour = date('H')+4;
    $min = date('i');
    $time = "{$hour}:{$min}";
    $q = "SELECT * FROM invoice order by id asc;";
    $r = mysql_query($q);
    confirm_query($r);
    $i = 0;
    while($info = mysql_fetch_array($r)){
      $i = $info['id'];
      $closing = $info['closing'];
    }
    $i++;
    $insert = "INSERT INTO invoice(id,`date`,`time`,user_id, closing)
                       values('$i','$date','$time','$id','$closing');";
    $res = mysql_query($insert);
    confirm_query($res);
    echo "<script> location = 'Home.php';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?>
