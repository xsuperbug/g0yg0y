<?php
include 'vulnconf.php';

	$id = $_GET['id'];
	$sql="SELECT * FROM cargo WHERE no=$id";
	$result=mysqli_query($link,$sql);


include 'ust.php'; 
?>

<!-- 1 -->
<div id="page-content-wrapper">
	<!-- 2 -->
	<div class="container-fluid">
		<!-- 3 -->
		<div class="row">
			<!-- 4 -->	
			<div class="col-lg-6">
			<h1>IDOR 101</h1>

<br><br>
<div class="well">
<h4>Track Your Shipment:</h5>
<hr>

<form action="idor1.php" method="GET">

  <div class="form-group">
    <label for="exampleInputEmail1">Tracking Number:</label>
    <input name="id" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <button type="submit" name="submit" class="btn btn-default">Search</button>
</form>
</div>	


<div class="well">
<h4>Results :</h5>
<hr>	
			<?php
			while($rows = mysqli_fetch_array($result)){
			 echo $rows['status'];
			}
			?>
</div>

				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
<?php include 'alt.php'; ?>        