<?php
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    if(isset($_GET['id'])){
      $invoiceid = $_GET['id'];
    }
    ?>
<body style="background:#252525;">
 <div class="col-md-1 height-84">
   <div class="categories">


      <?php
        $q3="SELECT * FROM category;";
        $r3=mysql_query($q3);
        confirm_query($r3);
        // echo "<div class=\"categories \">";
        while($info3=mysql_fetch_array($r3)){
          $catid=$info3['id'];
          echo "<div class=\"category shadowout  ";
          if(isset($_GET['cat_id']) && $_GET['cat_id'] == $catid){
            echo " active ";
          }
          echo "\" id=\"{$catid}\"><p class=\"centerv\">{$info3['cat_name']}</p></div>";
        }
        // echo "</div>";
      ?>
         </div>
      </div>
          <div class="col-md-7 height-84">
          <?php
            $q3="SELECT * FROM category;";
            $r3=mysql_query($q3);
            confirm_query($r3);
            while($info3=mysql_fetch_array($r3)){
              $catid=$info3['id'];
              echo "<div class=\"itemscont  item{$catid}\" ";
              if(isset($_GET['cat_id']) && $_GET['cat_id'] == $catid){
                echo " style=\"display:block;\" ";
              }
              echo ">";
              $q4="SELECT * from items where cat_id='$catid';";
              $r4=mysql_query($q4);
              confirm_query($r4);
              while($info4=mysql_fetch_array($r4)){
                echo "<a href=\"additem.php?invoiceid={$invoiceid}&itemid={$info4['id']}\"><div class=\"itembotton shadowout \">{$info4['item_name']}</div></a>";
              }
              echo "</div>";
            }
          ?>
        </div>
</body>
<?php
}
else echo "<script> location = 'index.php';</script>";
?>
