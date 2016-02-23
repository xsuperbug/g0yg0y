<?php
include 'vulnconf.php';
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);	
	$id = $_GET['id'];
	$sql="SELECT * FROM users WHERE id=$id";
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
			<h1>Sql Injection 105</h1>

<br>

<div class="well">
<div class="table-responsive">
<table class="table">

      <tbody>
        <tr class="active">
          <th scope="row">Username:</th>
          <td>
<?php

while($rows = mysqli_fetch_array($result)){
	echo $rows['username'];
}

?>
          </td>
        </tr>
      </tbody>
    </table>

</div>
</div>

<br>
<a href="sqli6.php?id=1">Click to move to the next stage</a>

				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>

<?php include 'alt.php'; ?>        