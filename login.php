<?php

include 'ust.php'; 
if(!empty($_SESSION['whoami'])) {
		$ok="<div class='alert alert-success' role='alert'>".$_SESSION['whoami']." has logged</div>";

}

?>
<?php  echo (!empty($ok) ? $ok : ""); ?>  
<!-- 1 -->
<div id="page-content-wrapper">
	<!-- 2 -->
	<div class="container-fluid">
		<!-- 3 -->
		<div class="row">
			<!-- 4 -->	
			<div class="col-lg-6">
                        <h1>Login Panel</h1><br>
<div class="well">
<h4>Please Login:</h5>
<hr>




<form action="conf.php" method="POST">  

  <div class="form-group">
    <label for="exampleInputEmail1">Username :</label>
    <input name="username" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password :</label>
    <input name="password" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br>



				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
<?php include 'alt.php'; ?>        