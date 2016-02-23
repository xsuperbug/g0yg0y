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
			<h1>LFI</h1>

<br>
<div class="well">
<?php

	$klasor = "private/";
	if($file=$_GET['file']){
	  include($klasor.$file);
	} 

?>
</div>
<br>




				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
        
<?php include 'alt.php'; ?>   