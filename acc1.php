<?php
include 'vulnconf.php';
$sql="SELECT * FROM users";
$result=mysqli_query($link,$sql);
$delete= $_GET['delete'];
$sql2="DELETE FROM users WHERE username='$delete'";
$result2=mysqli_query($link,$sql2);
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
			<h1>Missing Access Control</h1>

<br>
<div class="well">	
<br>
<h4>Users List</h5>
<div class="table-responsive">


<table class="table">
<tbody>
          
<?php while($rows = mysqli_fetch_array($result)){ ?>

<tr class="active">
<td><?php echo $rows['username']; if($_SESSION['whoami']=="admin"){ ?> <a href="acc1.php?delete=<?php echo $rows['username']; ?> ">Delete User</a> <?php } ?></td>
</tr> 

<?php } ?>  

</tbody>

</table>


</div>
</div>


				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
        
<?php include 'alt.php'; ?>        