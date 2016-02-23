<?php
if(isset($_FILES['dosya'])){
   $hata = $_FILES['dosya']['error'];
   if($hata != 0) {
      echo 'Sorry, your file was not uploaded.';
   } else {
      $boyut = $_FILES['dosya']['size'];
      if($boyut > (1024*1024*3)){
         echo 'Sorry, your file is too large.';
      } else {

            $dosya = $_FILES['dosya']['tmp_name'];
            @copy($dosya, 'upload/' . $_FILES['dosya']['name']);
            echo 'File Uploaded';
      }
   }
}

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
			<h1>File Upload 101</h1>

<div class="well">
<form action="fileupload1.php" method="post" enctype="multipart/form-data">

<div class="form-group">
   <label for="exampleInputEmail1">File Name</label>	
   <input type="file" name="dosya" />
</div>   

   <button type="submit" name="submit" class="btn btn-default">Upload</button>
   
</form>
</div>
<br>
<a href="#">Click to move to the next stage</a>


				<!-- /4 -->
				</div>
			<!-- /3 -->
			</div>
		<!-- /2 -->
		</div>

<?php include 'alt.php'; ?>        