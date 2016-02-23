<?php
if(isset($_POST['submit'])) {

		$ok="<div class='alert alert-success' role='alert'>The operation was completed successfully</div>";

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
			<h1>Command Injection 101</h1>

<div class="well">
<form action="cinj.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">IP/Hostname:</label>
    <input name="komut" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>


  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br>
<?php

$komut = @$_REQUEST['komut'];
$cmd = shell_exec( 'ping  -c 3 ' . $komut );
echo '<pre>'.$cmd.'</pre>';

?>

<br>
<a href="#">Click to move to the next stage</a>



				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
        
<?php include 'alt.php'; ?>   