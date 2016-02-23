<?php
if(isset($_POST['submit'])) {

		$ok="<div class='alert alert-success' role='alert'> The operation was completed successfully</div>";

}
 include 'ust.php'; 
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
			<h1>CSRF</h1>
<div class="well">			
<br>
<h4>Change My Password</h5>
<hr>

<form action="csrf1.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">New Password</label>
    <input name="baslik" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Verify New Password</label>
    <input name="baslik" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br>
<a href="#">Click to move to the next stage</a>



				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
        
<?php include 'alt.php'; ?>   