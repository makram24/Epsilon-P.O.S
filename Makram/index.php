<?php
ob_start();
require 'header1.php';
?>
<body style="background-color:#2E2E2E">
  <div class="col-md-12">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
	<form id='login' action="login.php" method="post" name="loginform" onsubmit="return validatelogin();" >
		<div class="login centervh">
			<div class="logo">Epsilon</div>
			<?php
				if(isset($_GET['error'])){
					echo "<div class=\"errorlogin\">The Login Is Invalid</div>";
				}
			?>
			<input type="password"  name="password" id="password" class="inputtext password0" placeholder="Password ..." style="direction: ltr;">
      <div class="numbers">
        <div class="number"><p class="centerv">1</p></div>
        <div class="number"><p class="centerv">2</p></div>
        <div class="number"><p class="centerv">3</p></div>
        <div class="number"><p class="centerv">4</p></div>
        <div class="number"><p class="centerv">5</p></div>
        <div class="number"><p class="centerv">6</p></div>
        <div class="number"><p class="centerv">7</p></div>
        <div class="number"><p class="centerv">8</p></div>
        <div class="number"><p class="centerv">9</p></div>
        <div class="number"><input type="reset" class="button number centerv" name='reset' value='RESET'></div>
        <div class="number"><p class="centerv">0</p></div>
        <div class="number"><input type="submit" class="button number centerv" name='submit' value='LOGIN'></div>
      </div>
		</div>
	</form>
</div>
<div class="col-md-4">
</div>
</body>
       			<!-- <input type="text"  name="username" id="username" class="inputtext username" placeholder="Username" autocomplete="off"><br>
	       		<input type="password"  name="password" id="password" class="inputtext password" placeholder="Password" autocomplete="off"><br>
       			<input type="submit" class="button loginbtn1" name='submit' value='Login'>
       		</div>
       	</form>
      </div> -->
<?php
require 'footer.php';
 ?>
