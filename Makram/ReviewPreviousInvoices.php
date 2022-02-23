<?php
require 'header2.php';
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $date = date('Y-m-d');
    $hour = date('H');
    $min = date('i');
    $time = "{$hour}:{$min}";
    $q = "SELECT * FROM invoice where paid=1 order by id desc limit 1;";
    $r = mysql_query($q);
    confirm_query($r);
    $i = 0;
    while($info = mysql_fetch_array($r)){
      $i = $info['id'];
    }
	}
  if(isset($_GET['invoiceid'])){
    $invoiceid = $_GET['invoiceid'];
  }
  ?>
	<div class="col-md-12">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
		<div class="returninvoicetable">
			<table>
			<tr>
				<td class="tablereturninv">Id</td>
				<td class="tablereturninv">Date</td>
				<td class="tablereturninv">Time</td>
				<td class="tablereturninv">Total</td>
				<td class="tablereturninv">Discount</td>
				<td class="tablereturninv">User Id</td>
			</tr>
      <tr>
        <?php
        $q1 = "SELECT * FROM invoice where paid=1 order by id;";
        $r1 = mysql_query($q1);
        confirm_query($r1);
        while ($row = mysql_fetch_array($r1)) {
        ?>
        <td class="tablereturninv"><?php echo $row["id"];?></td>
        <td class="tablereturninv"><?php echo $row["date"];?></td>
        <td class="tablereturninv"><?php echo $row["time"];?></td>
        <td class="tablereturninv"><?php echo $row["total"];?></td>
        <td class="tablereturninv"><?php echo $row["discount"];?></td>
        <td class="tablereturninv"><?php echo $row["user_id"];?></td>
      </tr>
      <?php
    } ?>
			</table>
		</div>
	</div>
  <div class="col-md-3">
  </div>
</div>

  <?php
}
// else echo "<script> location = 'index.php';</script>";
?>
