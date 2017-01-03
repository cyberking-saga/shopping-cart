<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Products</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-image: url('img/1.jpg');opacity:0.97;">
	<?php include 'header.php';
		$action=isset($_GET['action'])?$_GET['action']:"";
		if($action=='error'){
			echo "<div class='alert alert-info'>";
	        echo "Product was not added";
	   	 	echo "</div>";
		}

	?>
	<div class="col-sm-3"></div>
	<div class="col-sm-6" style="background-color:linen;padding:15px;">
	<h1>Add New Products</h1>

	<form  method="POST" action="addproduct.php"  enctype="multipart/form-data">
	
	<div class="form-group col-sm-12">
	<label class="control-label">Product Name</label>
	<input type="text" name="name" class="form-control" placeholder="Product name here" />
	</div>

	<div class="form-group col-sm-12">
	<label class="control-label">Price</label>
	<input type="text" name="price" class="form-control" placeholder="Price here" />
	</div>

	<div class="form-group col-sm-12">
	<label class="control-label">Image upload</label>
	<input type="file" id="imageToUpload" name="imageToUpload" class="file" />
	</div>

	<div class="form-group col-sm-12">
	  <label class="control-label">Description</label>
	  <textarea class="form-control" name="description" rows="5" ></textarea>
	</div>

	<div class="col-sm-7"><center>
	<button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-send"></span> Submit</button>

	<button type="reset" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove"></span> Reset</button>
	
	
	</center></div>

	</form>
	</div>
	
</body>
</html>