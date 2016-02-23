<?php
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
			<h1>XSS 101</h1>

<br>
<div class="well">
<h4>Results :</h4>
<hr>
<?php
echo $_GET["arama"];
?>
</div>


<br>
<a href="xss2.php">Click to move to the next stage</a>



				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
<?php include 'alt.php'; ?>        