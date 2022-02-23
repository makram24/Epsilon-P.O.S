<?php
// require 'new_invoice.php';
// if(isset($_SESSION['id'])){
//   $id=$_SESSION['id'];
//   if(isset($_GET['id']) && isset($_GET['method'])){
//     $id = $_GET['id'];
//     $method = $_GET['method'];
//     $update = "UPDATE invoice set paid = '1' , payment_method = '$method' where id = '$id';";
//     $res = mysql_query($update);
//     confirm_query($res);
//     echo "<script> location = 'Home.php?id={$id}';</script>";
//   }
// }
// else echo "<script> location = 'index.php';</script>";
?>
<?php
require 'header1.php';
if(isset($_SESSION['id'])){
  $user_id=$_SESSION['id'];
  if(isset($_GET['id']) && isset($_GET['method'])){
    $invoiceid = $_GET['id'];
    $method = $_GET['method'];
    $update = "UPDATE invoice set paid = '1' , payment_method = '$method' where id = '$invoiceid';";
    $res = mysql_query($update);
    confirm_query($res);
  }

    echo "<script> location ='Home.php?id={$invoiceid}';</script>";
  }
// }
  else echo "<script> location = 'index.php';</script>";
?>

    <!-- echo "<script> location = 'Home.php?id={$invoiceid}';</script>";
  }
}
else echo "<script> location = 'index.php';</script>";
?> -->
