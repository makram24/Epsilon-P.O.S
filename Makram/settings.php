<?php
require 'header1.php';
if(isset($_SESSION['id'],$_SESSION['password'])){
	$userid = $_SESSION['id'];
			$paid = $_SESSION['paidid'];
	  $date = date('Y-m-d');
  ?>
	<?php
	if(isset($_SESSION['id'],$_SESSION['privilege']) && $_SESSION['privilege']=="administrator"){
		$selected = $_SESSION['casherid'];
		$closing = $_SESSION['closing'];
		?>
<body>
  <div class="settings_parent ">
			<div class="col-md-12">
				<div class="col-md-2">
	    <div class="settings_child floatleft shadowout" id="purchase">
	      <a href="#"><p class="settingsbottom1">purchase</p></a>
	    </div>
			<div class="settings_child floatleft shadowout" id="addnewcategory">
				<a href="#"><p class="settingsbottom">Add New Category</p></a>
			</div>
	    <div class="settings_child floatleft shadowout" id="addnewproduct">
	      <a href="#"><p class="settingsbottom">Add New Product</p></a>
	    </div>

	    <div class="settings_child floatleft shadowout" id="addnewuser">
	      <a href="#"><p class="settingsbottom">Add New User</p></a>
	    </div>
		</div>
		<div class="col-md-2">
	    <div class="settings_child floatright  shadowout" id="globalreport">
	      <a href="#"><p class="settingsbottom1">Global Report</p></a>
	    </div>
			<div class="settings_child floatright  shadowout" id="casherreport">
				<a href="#"><p class="settingsbottom1">Casher Report</p></a>
	    </div>
	    <div class="settings_child floatright  shadowout" id="ReviewPreviousInvoices">
	      <a href="#"><p class="settingsbottom1">Review previous invoices</p></a>
	    </div>
	    <div class="settings_child  floatright shadowout">
	      <a href="signout.php"><p class="settingsbottom1">Log out</p></a>
	    </div>
		</div>
		<div class="col-md-2">
			<div class="settings_child  floatright shadowout" id="PreviousPerchase">
			 <a href="#"><p class="settingsbottom1">Previous purchase</p></a>
		 </div>
			 <div class="settings_child floatleft shadowout">
 	      <a href="closing.php"><p class="settingsbottom1">Closing</p></a>
 	    </div>
		 </div>
			<div class="col-md-6 left-settings">
<div id="addnewuserdata">
					<div class=" ">
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
					<?php
				  if(isset($_GET['add']) && $_GET['add']== "true"){
				    echo "<div class=\"success\">Successfully Added</div>";
				  }
					?>
</div>
<div id="purchasedata">
	 <div class="purchasetable">
		 <div class="col-md-12">
	  <form action="purchasecreate.php" method="POST" name="addpurchaseinvoice" onsubmit="return validatenewpurchase();">
	    <div class="col-md-4">
	        <input type="number" name="orderid" class="purchase2 orderid " placeholder="order id" />
	      </div>
	      <div class="col-md-8">
	        <input type="text" name="customername" class="purchase2 customername " placeholder="customer name" />
	      </div>
	          </div>
	      <div class="col-md-12">
	        <table class="tablepur">
	         <tr>
	            <td class="purcahsetable">barcode</td>
	            <td class="purcahsetable">item name</td>
	            <td class="purcahsetable quantity">quantity</td>
	            <td class="purcahsetable price">price</td>
	            <td class="purcahsetable actualamount">amount</td>
	            <td class="purcahsetable tax ">tax1 rate</td>
	            <td class="purcahsetable tax ">tax1 amount</td>
	            <td class="purcahsetable tax ">tax2 rate</td>
	            <td class="purcahsetable tax ">tax2 amount</td>
	            <td class="purcahsetable tax ">tax3 rate</td>
	            <td class="purcahsetable tax ">tax3 amount</td>
	            <td class="purcahsetable actualamount">final amount</td>
	          </tr>
	      <tr>
	        <td><input type="text" name="barcode" class="purchase1 barcode " /></td>
	        <td><input type="text" name="itemnname" class ="purchase1 itemname " /></td>
	        <td><input type="number" name="quantity" class="purchase1 quantity " /></td>
	        <td><input type="number" name="price" class="purchase1 price "/></td>
	        <td><input type="number" name="actualamount" class="purchase1 actualamount " /></td>
	        <td><input type="number" name="tax1rate" class="purchase1 tax " /></td>
	        <td><input type="number" name="tax1amount" class="purchase1 tax " /></td>
	        <td><input type="number" name="tax2rate" class="purchase1 tax " /></td>
	        <td><input type="number" name="tax2amount" class="purchase1 tax " /></td>
	        <td><input type="number" name="tax3rate" class="purchase1 tax " /></td>
	        <td><input type="number" name="tax3amount" class="purchase1 tax " /></td>
	        <td><input type="number" name="finalamount" class="purchase1 finalamount actualamount " /></td>
	      </tr>
			<tr>
					<td><input type="text" name="barcode1" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname1" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity1" class="purchase1 quantity " /></td>
					<td><input type="number" name="price1" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount1" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate1" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount1" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate1" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount1" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate1" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount1" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount1" class="purchase1 finalamount actualamount " /></td>
				</tr>
			<tr>
					<td><input type="text" name="barcode2" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname2" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity2" class="purchase1 quantity " /></td>
					<td><input type="number" name="price2" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount2" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate2" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount2" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate2" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount2" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate2" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount2" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount2" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode3" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname3" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity3" class="purchase1 quantity " /></td>
					<td><input type="number" name="price3" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount3" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate3" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount3" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate3" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount3" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate3" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount3" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount3" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode4" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname4" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity4" class="purchase1 quantity " /></td>
					<td><input type="number" name="price4" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount4" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate4" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount4" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate4" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount4" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate4" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount4" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount4" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode5" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname5" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity5" class="purchase1 quantity " /></td>
					<td><input type="number" name="price5" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount5" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate5" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount5" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate5" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount5" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate5" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount5" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount5" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode6" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname6" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity6" class="purchase1 quantity " /></td>
					<td><input type="number" name="price6" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount6" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate6" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount6" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate6" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount6" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate6" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount6" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount6" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode7" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname7" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity7" class="purchase1 quantity " /></td>
					<td><input type="number" name="price7" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount7" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate7" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount7" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate7" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount7" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate7" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount7" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount7" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode8" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname8" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity8" class="purchase1 quantity " /></td>
					<td><input type="number" name="price8" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount8" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate8" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount8" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate8" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount8" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate8" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount8" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount8" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode9" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname9" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity9" class="purchase1 quantity " /></td>
					<td><input type="number" name="price9" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount9" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate9" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount9" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate9" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount9" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate9" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount9" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount9" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode10" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname10" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity10" class="purchase1 quantity " /></td>
					<td><input type="number" name="price10" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount10" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate10" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount10" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate10" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount10" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate10" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount10" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount10" class="purchase1 finalamount actualamount " /></td>
				</tr>
				<tr>
					<td><input type="text" name="barcode11" class="purchase1 barcode " /></td>
					<td><input type="text" name="itemnname11" class ="purchase1 itemname " /></td>
					<td><input type="number" name="quantity11" class="purchase1 quantity " /></td>
					<td><input type="number" name="price11" class="purchase1 price "/></td>
					<td><input type="number" name="actualamount11" class="purchase1 actualamount " /></td>
					<td><input type="number" name="tax1rate11" class="purchase1 tax " /></td>
					<td><input type="number" name="tax1amount11" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2rate11" class="purchase1 tax " /></td>
					<td><input type="number" name="tax2amount11" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3rate11" class="purchase1 tax " /></td>
					<td><input type="number" name="tax3amount11" class="purchase1 tax " /></td>
					<td><input type="number" name="finalamount11" class="purchase1 finalamount actualamount " /></td>
				</tr>
	    </table>
			<div class="col-md-12">
				<div class="col-md-4">
						<input type="number" name="Total" class="purchase2 total-input " placeholder="Total L.L" />
					</div>
					<div class="col-md-8">
						<input type="text" name="Paid1" class="purchase2 paid-status-input" placeholder="paid/unpaid"/>
					</div>
			</div>
	    <input type="submit"  name="submit" value="Upload" class="button2" />
	  </form>
	</div>
	</div>
	<?php
	if(isset($_GET['add']) && $_GET['add']== "true"){
	  echo "<div class=\"success\">Successfully Added</div>";
	}
	elseif(isset($_GET['add']) && $_GET['add']== "false"){
		  echo "<div class=\"success\">Error</div>";
		}

	?>
</div>
<div id="addnewcategorydata">
		<div class="close_report">
	  <div class="">
			<div class="closing">
	      <form action="addnewcategorydata.php" method="POST" name="addcategoryform" onsubmit="return validateaddcategory();">
	        <input type="text" name="categoryname" class="inputtext categoryname addnewiteminput" placeholder="Category Name"/>
	        <input type="submit"  name="submit" value="APPLY" class="button2" />
	      </form>
			</div>
	  </div>
	</div>
	  <?php
	  if(isset($_GET['add']) && $_GET['add']== "true"){
	    echo "<div class=\"success\">Successfully Added</div>";
	  }
	?>
</div>
<div id="addnewproductdata">
	  <div class="">
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
	  <?php
	  if(isset($_GET['add']) && $_GET['add']== "true"){
	    echo "<div class=\"success\">Successfully Added</div>";
	  }
		elseif(isset($_GET['add']) && $_GET['add']== "false"){
				echo "<div class=\"success\">Error</div>";
			}
	?>
<div id="ReviewPreviousInvoicesdata">
	<?php
	  if(isset($_POST['submit'])){
	    $date = date('Y-m-d');
	    $hour = date('H');
	    $min = date('i');
	    $time = "{$hour}:{$min}";
	    $q = "SELECT * FROM invoice where paid=1 and closing = '$closing' order by id desc limit 1;";
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
			<div class="returninvoicetable">
				<h2 class="report-casher-text1">Previous Invoices</h2>
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
	        $q1 = "SELECT * FROM invoice where paid=1 and closing = '$closing' order by id;";
	        $r1 = mysql_query($q1);
	        confirm_query($r1);
	        while ($row = mysql_fetch_array($r1)) {
	        ?>
	        <td class="tablereturninv"><?php echo $row["id"];?></td>
	        <td class="tablereturninv"><?php echo $row["date"];?></td>
	        <td class="tablereturninv"><?php echo $row["time"];?></td>
	        <td class="tablereturninv"><?php echo $row["total"];?></td>
	        <td class="tablereturninv"><?php echo $row["discount_amount"];?></td>
	        <td class="tablereturninv"><?php echo $row["user_id"];?></td>
	      </tr>
	      <?php
	    } ?>
				</table>
			</div>
</div>
<div id="globalreportdata">
			<div class="returninvoicetable">
				<h2 class="report-casher-text1">Global Report</h2>
				<br>
				<table>
				<tr>
					<?php
					$q3 = "SELECT * FROM manager where id = '$userid';";
					$r3 = mysql_query($q3);
					confirm_query($r3);
					$row2 = mysql_fetch_array($r3);
					$username = $row2['username'];

					$q1 = "SELECT * FROM invoice where block = 0 order by id;";
					$r1 = mysql_query($q1);
					confirm_query($r1);
					$total = 0;
					$discount = 0;
					while ($row = mysql_fetch_array($r1)) {
						$total += $row["total"];
						$discount += $row["discount_amount"];
				}
			 ?>
			 <?php
			 $q2 = "SELECT * FROM invoice i , invoice_item a, items t where i.id = a.invoiceid and a.itemid = t.id and i.block = 0;";
			 $r2 = mysql_query($q2);
			 confirm_query($r2);
			 $voidpri = 0;
			 $cat1 = 0;
			 $cat2 = 0;
			 $cat3 = 0;
			 $cat4 = 0;
			 $cat5 = 0;
			 while ($row = mysql_fetch_array($r2)) {
				 $voidqua = $row['voidquantity'];
				 $price = $row['price'];
				 $sum = $voidqua * $price;
				 if ($sum > 0) {
					 $voidpri += $sum;
				 }


				 $catnum = $row["cat_id"];
				 if ($catnum == 1) {
					$cat1 += $row["price"];
				 }
				 elseif ($catnum == 2) {
					$cat2 += $row["price"];
				 }
				 elseif ($catnum == 3) {
					$cat3 += $row["price"];
				 }
				 elseif ($catnum == 4) {
					$cat4 += $row["price"];
				 }
				 elseif ($catnum == 5) {
					$cat5 += $row["price"];
				 }
			 ?>
		 <?php
		 }
		?>
		<div class="col-md-12">
			<div class="col-md-6">
				<p class="text-left report-casher-text">Admin Name: <?php echo $username; ?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center report-casher-text">Date: <?php echo $date; ?> </p>
			</div>
		</div>
		<br>
		<hr>
		<div class="col-md-12">
			<div class="col-md-4">
				<p class="text-left report-casher-text">Home: <?php echo $cat1;?>L.L</p>
				<p class="text-left report-casher-text">Bread: <?php echo $cat2;?>L.L</p>
			</div>
			<div class="col-md-4">
				<p class="text-left report-casher-text">Chocolate: <?php echo $cat3;?>L.L</p>
				<p class="text-left report-casher-text">Bavarige: <?php echo $cat4;?>L.L</p>
			</div>
			<div class="col-md-4">
			<p class="text-left report-casher-text">Beer: <?php echo $cat5;?>L.L</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-left">Discount: <?php echo $discount;?>L.L</h4>
			</div>
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-center">Total: <?php echo $total;?>L.L</h4>
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-left">Void amount: <?php echo $voidpri;?>L.L</h4>
			</div>
		</div>
		<div class="col-md-12">
					<hr>
			<h3 class="report-casher-text1">Product</h3>
			<br>
			<?php
			$q3 = "SELECT item_name , Sum(price) as sum FROM invoice i , invoice_item a, items t where i.id = a.invoiceid and a.itemid = t.id and i.block = 0 Group By t.item_name ;";
			$r3 = mysql_query($q3);
			confirm_query($r3);
			while ($row = mysql_fetch_array($r3)) {
				$item = $row["item_name"];
				$sumprice = $row["sum"]
				?>
				<p class="text-left report-casher-text"><?php echo $item;?>: <?php echo $sumprice;?>L.L</p>
		<?php
		}
		?>
		</div>
		</tr>
				</table>
			</div>
</div>
<div id="casherreportdata">
	<form class="" action="casherreportdata.php" method="post">
		<div class="form-group">
			<label for="sel1"><h5>Select User:</h5></label>
			<hr>
				<?php
				  if(!empty($_GET['radioclass'])){
						$selected = $_GET['radioclass'];
					}
				$q2 = "SELECT * FROM manager order by id;";
				$r2 = mysql_query($q2);
				confirm_query($r2);
				while ($row = mysql_fetch_array($r2)) {
					$userid = $row['id'];
					$username = $row['username'];
					// echo $selected;
				 ?>
				 <div class="col-md-2 left">
				<!-- <p class=""></p> -->
				<input type="radio" class="radioclass inputradiousername" name"radioclass" value=<?php echo $userid;?> id=<?php echo $userid;?>>
				<?php echo $username;?></input>
				</div>
				<?php
				}
				 ?>
				 <div class="r-text">
				 </div>
				 <script>
					 $('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
							 var value = $(this).val(); //Get the clicked checkbox value
							 $('.r-text').html('<input type="text" name="idchash" class="shownone" value="' +value + '""/>');
						 });
						 </script>
				 <input type="submit" id="casheridbtn" name="casheridbtn" value="SHOW" class="casheridbtn" />
				 <hr>
		</div>
	</form>
			<div class="returninvoicetable">
				<h2 class="report-casher-text1">Casher Report</h2>
				<br>
				<table>
	      <tr>

	        <?php
	        $q1 = "SELECT * FROM invoice where user_id = '$selected' and block = 0 order by id;";
	        $r1 = mysql_query($q1);
	        confirm_query($r1);
					$total = 0;
					$discount = 0;
	        while ($row = mysql_fetch_array($r1)) {
						$total += $row["total"];
						$discount += $row["discount_amount"];
				}
			 ?>
			 <?php
			 $q3 = "SELECT * FROM manager where id = '$selected';";
			 $r3 = mysql_query($q3);
			 confirm_query($r3);
			 $row2 = mysql_fetch_array($r3);
			 $username = $row2['username'];
			 $q2 = "SELECT * FROM invoice i , invoice_item a, items t where i.id = a.invoiceid and a.itemid = t.id and i.user_id = '$selected' and i.block = 0;";
			 $r2 = mysql_query($q2);
			 confirm_query($r2);
			 $voidqua =0;
			 $cat1 = 0;
			 $cat2 = 0;
			 $cat3 = 0;
			 $cat4 = 0;
			 $cat5 = 0;
			 while ($row = mysql_fetch_array($r2)) {
				 $voidqua = $row['voidquantity'];
				 $price = $row['price'];
				 $sum = $voidqua * $price;
				 if ($sum > 0) {
					 $voidpri += $sum;
				 }
				 $catnum = $row["cat_id"];
				 if ($catnum == 1) {
				 	$cat1 += $row["price"];
				 }
				 elseif ($catnum == 2) {
				 	$cat2 += $row["price"];
				 }
				 elseif ($catnum == 3) {
				 	$cat3 += $row["price"];
				 }
				 elseif ($catnum == 4) {
				 	$cat4 += $row["price"];
				 }
				 elseif ($catnum == 5) {
				 	$cat5 += $row["price"];
				 }
			 ?>
		 <?php
		 }
		?>
		<div class="col-md-12">
			<div class="col-md-6">
				<p class="text-left report-casher-text">User Name: <?php echo $username;?></p>
			</div>
			<div class="col-md-6">
				<p class="text-center report-casher-text">Date: <?php echo $date;?></p>
			</div>
		</div>
		<br>
		<hr>
		<div class="col-md-12">
			<div class="col-md-4">
				<p class="text-left report-casher-text">Home: <?php echo $cat1;?>L.L</p>
				<p class="text-left report-casher-text">Bread: <?php echo $cat2;?>L.L</p>
			</div>
			<div class="col-md-4">
				<p class="text-left report-casher-text">Chocolate: <?php echo $cat3;?>L.L</p>
				<p class="text-left report-casher-text">Bavarige: <?php echo $cat4;?>L.L</p>
			</div>
			<div class="col-md-4">
			<p class="text-left report-casher-text">Beer: <?php echo $cat5;?>L.L</p>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-left">Discount: <?php echo $discount;?>L.L</h4>
			</div>
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-center">Total: <?php echo $total;?>L.L</h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="col-md-6">
			<h4 class="report-casher-text2 text-left">Void amount: <?php echo $voidpri;?>L.L</h4>
			</div>
		</div>
		<br>
		<div class="col-md-12">
					<hr>
			<h3 class="report-casher-text1">Product</h3>
			<br>
			<h4>Void Products</h4>
			<br>
			<?php
			$q3 = "SELECT * FROM invoice i , invoice_item a, items t where i.id = a.invoiceid and a.itemid = t.id and i.user_id = '$selected' and i.block = 0 and a.voidreason is not null;";
			$r3 = mysql_query($q3);
			confirm_query($r3);

			while ($row = mysql_fetch_array($r3)) {
				$item = $row["item_name"];
				$sumprice = $row["price"];
				$reason = $row["voidreason"];
				?>
				<p class="text-left report-casher-text"><?php echo $item;?>: <?php echo $sumprice;?>L.L , Reason: <?php echo $reason;?> </p>
		<?php
		}
		?>
		<br>
		<h4>Products</h4>
		<br>
			<?php
			$q3 = "SELECT item_name , Sum(price) as sum FROM invoice i , invoice_item a, items t where i.id = a.invoiceid and a.itemid = t.id and i.user_id = 1 and i.block = 0 Group By t.item_name ;";
			$r3 = mysql_query($q3);
			confirm_query($r3);
			while ($row = mysql_fetch_array($r3)) {
				$item = $row["item_name"];
				$sumprice = $row["sum"]
				?>
				<p class="text-left report-casher-text"><?php echo $item;?>: <?php echo $sumprice;?>L.L</p>
		<?php
		}
		?>
		</div>
	</tr>
				</table>
			</div>
</div>
<div id="PreviousPerchasedata">
	<br>
	<div class="col-md-12">
		<h2 class="report-casher-text1 center">Previous Perchase</h2>
		<hr>
			<form class="" action="paid.php" method="post">
	<div class="col-md-5">
		<input type="radio" class="radioclass inputradiousername" name"radioclass" value= 1 > Paid </input>
	</div>
	<div class="col-md-5">
		<input type="radio" class="radioclass inputradiousername" name"radioclass" value= 0> Un Paid </input>
	</div>
	<div class="col-md-2">
		<div class="text-paid">
		</div>
		<script>
			$('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
					var value = $(this).val(); //Get the clicked checkbox value
					$('.text-paid').html('<input type="text" name="paid" class="shownone" value="' +value + '""/>');
				});
				</script>
		<input type="submit" id="paidbtn" name="paidbtn" value="SHOW" class="paidbtn" />
	</div>
	</form>
	<br>
	<hr>
	</div>

	<?php
	$q3 = "SELECT DISTINCT i.order_id , i.customer_name ,p.pur_paid ,o.pur_total FROM pur_paid p , pur_order_items i , pur_order o where p.pur_paid = '$paid' and p.pur_order_id = o.pur_order_id and p.pur_order_id = i.order_id and p.pur_order_id = i.order_id	;";
	$r3 = mysql_query($q3);
	confirm_query($r3);
	while ($row2 = mysql_fetch_array($r3)) {
	?>
	<div class="col-md-12">
		<div class="col-md-2">
			<p><?php echo $row2['order_id'] ?></p>
		</div>
		<div class="col-md-4">
			<p><?php echo $row2['customer_name'] ?></p>
		</div>
		<div class="col-md-4">
			<p><?php echo $row2['pur_total'] ?></p>
		</div>
		<div class="col-md-2">
			<?php
			$ppp = $row2['pur_paid'];
			if ($ppp == 0) {
				?>
				<p>Un Paid</p>
				<?php
			}
			else{
				?>
				<p>Paid</p>
				<?php
			}
			 ?>
		</div>
	</div>
	<?php
	}
	 ?>
</div>
				</div>
			</div>
	</div>
	</div>
</body>

  <?php
}
}
// else echo "<script> location = 'index.php';</script>";
?>
