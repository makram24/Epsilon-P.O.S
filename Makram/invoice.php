<?php
if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  if(isset($_POST['submit'])){
    $date = date('Y-m-d');
    $hour = date('H');
    $min = date('i');
    $time = "{$hour}:{$min}";
    $q = "SELECT * FROM invoice order by id desc limit 1;";
    $r = mysql_query($q);
    confirm_query($r);
    $i = 0;
    while($info = mysql_fetch_array($r)){
      $i = $info['id'];
    }
    $i++;
    $insert = "INSERT INTO invoice(id,`date`,`time`,`user_id`)
                       values('$i','$date','$time','$id');";
    $res = mysql_query($insert);
    confirm_query($res);
    $invoiceid = $i;
  }

  if(isset($_GET['id'])){
    $invoiceid = $_GET['id'];
  }
  ?>
  <div class="col-md-4 margin-">
  <div class="systemmain">
    <div class="invoicesec" id="printableArea">
    <?php
      $q2="SELECT * FROM invoice a,manager b where a.id = '$invoiceid' and a.user_id=b.id  ;";
      $r2=mysql_query($q2);
      confirm_query($r2);
      $info2=mysql_fetch_array($r2);
    ?>

    <table class="invoicecont" >
      <?php
        $q1="SELECT * from invoice_item a,items b where a.invoiceid = '$invoiceid' and a.itemid=b.id order by a.invoice_item_id asc;";
        $r1=mysql_query($q1);
        confirm_query($r1);
        if(!empty($_GET['voiditems[]'])){ $selected = $_GET['voiditems[]'];}
        if(mysql_num_rows($r1)){
          ?>
          <form action="voiditems.php?id=<?php echo $invoiceid ?>" method="POST" name="itemform" onsubmit="return validatesubmitvoiditem()">
          <tr>
            <th class="checkbox shownone">Void</th>
            <th class="item_quantity">Quan</th>
            <th class="item_name">Name</th>
            <th class="item_price">Price</th>
          </tr>
          <?php
          while($info1=mysql_fetch_array($r1)){
            $price = $info1['price']*$info1['quantity'];
            ?>
          <tr id=<?php echo $info1['id']; ?>>
          <td class="checkbox shownone">
            <input type="radio" id=" <?php echo $info1['invoice_item_id']; ?>" class="checkbox shownone " name="voiditems[]" value=" <?php echo $info1['invoice_item_id']; ?>" />
          </td>
          <td class="item_quantity">
             <?php echo $info1['quantity']; ?>
          </td>
          <td class="item_name">
            <?php echo $info1['item_name']; ?>
          </td>
          <td class="item_price">
            <?php echo $price; ?>
          </td>
          </tr>
          <?php
          }
          $total = $info2['total'];
          $alltotal = $total;
          if($info2['discount']!="" && $info2['discount']!=0){
		          $alltotal=$info2['discount_amount']+$total;
          }
          ?>


          <?php
          $totaldollar = round($total/1500,2);
          ?>
          </table>
          </div>

          <div class="controls shadowout1">
          <div id="input_container col-md-12">
          <div class=" total2 col-md-6 left">Total <?php echo $alltotal; ?></div>
          <div class=" discount1 col-md-6 left">
          Discount <?php echo $info1['discount']; ?>%   -<?php echo $info2['discount_amount']; ?>
          </div>
          <div class ="col-md-12">
          <div class="col-md-6 totallbp1">Total LBP <?php echo $total; ?></div>
          <div class="col-md-6 totalusd1">Total USD <?php echo $totaldollar; ?></div></div>

          <input type="text" id="search" class="search" name="itemsearch" placeholder="Search">
          <button class="fa fa-search savebtn1"></button>
         <!-- <input type=\"image\" src=\"image/search.png\" class=\"input_img savebtn\" name=\"submit\" value=\"search\"  onclick=\"return searchitem();\"> -->
          </div>
               <!-- <input type="button" class="controlbotton" name="Hold" value="Hold" placeholder="Hold"> -->
                <div class="controlbotton Hold" id =<?php echo $invoiceid;?>>Hold</div>
                <div class="controlbotton Recoll" id="Recollbtn" >Recoll</div>
          <div class="controlbotton Addbuttom">Add</div>
          <div class="controlbotton lessbuttom">Less</div>
          <div class="controlbotton" onclick="printDiv('printableArea')">Print</div>
           <?php
           }
                    $q5="SELECT * from invoice where id = '$invoiceid';";
                    $r5=mysql_query($q5);
                    confirm_query($r5);
                    $info5 = mysql_fetch_array($r5);
                    if($info5['paid']!="1"){
                      ?>
                      <div class="controlbotton paid">Paid</div>

                        <div class="controlbotton voiditem">VOID</div>
                        <input type="submit" name="submit" value="VOID" class=" controlbotton2 voiditem2 button3" />
                        <?php
                        if($_SESSION['privilege']=="user"){
                        ?>
                        <div id="reasonblock" class="shownone reasonblock">
                          <h3>Reason for Void</h3>
                          <input type="text" name="voidreason" id="reason" class="" />
                        </div>

                        </form>
                      <?php
                    }
                    ?>
                      <div class="controlbotton discount">Discount</div>
                      <?php
                    }
                    ?>
            <?php
            // $q="SELECT * from invoice_item where invoiceid = '$invoiceid' and itemid = '$itemid'";
            // $r = mysql_query($q);
            // confirm_query($r);
            // if(mysql_num_rows($r)){
            //   $update = "UPDATE invoice_item set quantity = quantity + 1 where itemid = '$itemid'";
            //   $res = mysql_query($update);
            //   confirm_query($res);
            }
            ?>


                <div class="paymentmethod centervh  ">
                <a href="payment.php?id=<?php echo $invoiceid;?>&method=cach"><div class="controlbotton1">Cach</div></a>
                <a href="payment.php?id=<?php echo $invoiceid;?>&method=creditcard"><div class="controlbotton1">Credit Card</div></a>
                <?php if($_SESSION['privilege']=="administrator"){
                echo "<a href=\"payment.php &method=AandG\"><div class=\"controlbotton1\">On Account</div></a>";
                }?>
                </div>
                <div class="discountsec  centervh  ">
                <form action="dicount.php?invoiceid=<?php echo $invoiceid;?>" method="POST" name="discountform" onsubmit="return validatediscount();">
                  <input type="number" name="discountinput" class="inputtext3 discountinput" placeholder="Discount %" value="<?php echo $info5['discount'];?>"/></br>
                  <input type="submit"  name="submit" value="APPLY" class="button4" />
                </form>
                </div>
                <div class="addbuttominput1 centervh  ">
                <form action="add.php?invoiceid=<?php echo $invoiceid;?>" method="POST" name="addbuttomform" onsubmit="return validateaddbuttom()">
                  <input type="number" name="addbuttominput" class="invoiceid inputtext3 addbuttominput" placeholder="Add number" /></br>
                  <input type="text" name="invoiceidd" class="shownone" value="<?php echo $invoiceid;?>" /></br>
                  <div class="r-text">

                  </div>
                  <script>
                    $('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
                        var value = $(this).val(); //Get the clicked checkbox value
                        $('.r-text').html('<input type="text" name="idtt" class="shownone" value="' +value + '"">');
                      });
                      </script></input>
                  <input type="submit"  name="addbtn" value="APPLY" class="addbtn" />
                </form>
                </div>
                <div class="lessbuttominput1 centervh  ">
                <form action="less.php?invoiceid=<?php echo $invoiceid;?>" method="POST" name="lessbuttomform" onsubmit="return validatelessbuttom()">
                  <input type="number" name="lessbuttominput" class="invoiceid inputtext3 lessbuttominput" placeholder="Add number" /></br>
                  <input type="text" name="invoiceidd" class="shownone" value="<?php echo $invoiceid;?>" /></br>
                  <div class="r-text">

                  </div>
                  <script>
                    $('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
                        var value = $(this).val(); //Get the clicked checkbox value
                        $('.r-text').html('<input type="text" name="idtt" class="shownone" value="' +value + '"">');
                      });
                      </script></input>
                  <input type="submit"  name="lessbtn" value="APPLY" class="addbtn" />
                </form>
                </div>

                </div>
                </div>
                </div>
                <div class="col-md-12">
                <div class="RecollModel" id="Recoll" role="dialog">
                  <div class="Recoll-content">
                    <div class="Recoll-body">
                      <h4>Unpaid invoices</h4>
                      <p>ID      Date      Time</p>
                      <table>
                        <hr>
                      <?php
                          $m="SELECT * FROM invoice where paid = 0 and user_id = '$id';";
                          $n=mysql_query($m);
                          confirm_query($n);
                          while($info10=mysql_fetch_array($n)){
                            ?>
                            <tr>
                            <div class="RecollData" id=<?php echo $info10["id"]; ?>><?php echo $info10["id"]; ?>     <?php echo $info10["date"]; ?>     <?php echo $info10["time"]; ?></div>
                            </tr>
                            <hr>
                            <?php
                          }
                           ?>
                      </table>
                     </div>
                   </div>
                </div>
              </div>
    <?php
    // else echo "<script> location = 'index.php';</script>";
?>
