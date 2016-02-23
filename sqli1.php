<?php
include 'vulnconf.php';
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'"; 
	$result=mysqli_query($link,$sql);
	$count=mysqli_num_rows($result);
		$ok = ($count>0?
			"<div class=\"alert alert-success\" role=\"alert\">The operation was completed successfully</div>":
			"<div class=\"alert alert-danger\" role=\"alert\">Wrong username</div>");
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
             <h1>Sql Injection 101</h1>
<div class="well">
<form action="sqli1.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
<br>
<a href="sqli2.php">Click to move to the next stage</a>


				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>

<?php include 'alt.php'; ?>        