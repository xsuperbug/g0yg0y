<?php
include 'vulnconf.php';
if(isset($_POST['submit'])) {
	
	$subject = $_POST['subject']; 
	$comment = $_POST['comment'];
	$sql = "INSERT INTO `comments`(`id`, `subject`, `comment`) VALUES ('','$subject','$comment')";

	
	$result=mysqli_query($link,$sql);
	if($result==true){
		$ok="<div class='alert alert-success' role='alert'>Comment added</div>";
	}else {
		$ok="<div class='alert alert-danger' role='alert'>Error</div>";
	}



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
            <h1>XSS 102</h1>

<br><br>
<table class="table">

      <tbody>

<h4>Comments : </h4>
<hr>

<?php
$sql = "SELECT * FROM comments";
$result=mysqli_query($link,$sql);
while($rows = mysqli_fetch_array($result)){
?>
        <tr class="active">
          <th scope="row">id  : <?php echo $rows['id']; ?></th>
          <td>
<?php	
 echo $rows['subject'];
?>
		  <td>
          <td>
<?php	
 echo $rows['comment'];
?>
		  <td>		  	
		</tr>
<?php
}
?>
          
      </tbody>
    </table>


<br><br>
<div class="well">
<h4>Add a comment :</h5>
<hr>

<form action="xss2.php" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Subject :</label>
    <input name="subject" class="form-control" id="exampleInputEmail1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Comment :</label>
    <textarea name="comment" class="form-control"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

<br>
</div>
<a href="xss3.php">Click to move to the next stage</a>


				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>
<?php include 'alt.php'; ?>        