<?php
include 'vulnconf.php';
$id = $_GET['id'];
$sql="SELECT * FROM users WHERE id=$id";
$result=mysqli_query($link,$sql) or die("oops");
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
            <h1>Sql Injection 106</h1>

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



				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>

<?php include 'alt.php'; ?>        