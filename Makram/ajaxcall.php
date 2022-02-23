<?php
  session_start();
  require("functions.php");
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    if(isset($_POST['Hold'])){
  if(isset($_POST['itemsearch'],$_POST['search']) && $_POST['search']==1){
    $itemsearch = $_POST['itemsearch'];
    echo "<table  class=\"table1\">
            <tr>
              <th>Barcode</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>";
    $q="SELECT * from items a,invoice_item b where a.id=b.itemid and b.quantity = '$quantity' and a.item_name='$itemsearch' order by a.item_name asc;";
    $r=mysql_query($q);
    confirm_query($r);
    if(mysql_num_rows($r)>0){
      while($info = mysql_fetch_array($r)){
        echo "<tr>
                <td>{$info['Barcode']}</td>
                <td>{$info['item_name']}</td>
                <td class=\"client_name\">{$info['price']}</td>
                <td>{$info['quantity']}</td>
                </tr>";
      }
    }
    echo "</table>";
  }
  ?>

      $categoryname = $_POST['categoryname'];
      $q="SELECT * from category order by id desc limit 1;";
      $r=mysql_query($q);
      confirm_query($r);
      $i=0;
      if(mysql_num_rows($r)>0){
        $info=mysql_fetch_array($r);
        $i = $info['id'];
      }
      $i++;
      $insert = "INSERT INTO category (id,cat_name) values ('$i','$categoryname');";
      $res = mysql_query($insert);
      confirm_query($res);
      echo "<script> location = 'settings.php?add=true';</script>";
    }
  }
  else echo "<script> location = 'index.php';</script>";
  ?>
