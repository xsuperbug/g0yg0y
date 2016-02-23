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
			<h1>Open Redirection</h1>

<br>
<a href="redirection.php?return=http://www.superbug.co">Superbug Bilgi Güvenliği Topluluğu</a>
<?php

if($_GET){
$return=$_GET['return'];
header("Location: ".$return);
}

?>

<br>

				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
        
<?php include 'alt.php'; ?>   