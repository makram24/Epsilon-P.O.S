<?php
  session_start();
  require("functions.php");
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
