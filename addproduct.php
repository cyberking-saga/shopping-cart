<?php
			include 'connect.php';
			$name=$_POST["name"];
			$price=$_POST["price"];
			$description=$_POST["description"];
			
			/////////////////////IMAGE_UPLOAD///////////////////////////////////////
			$target_dir = 'img/';
			$target_file = $target_dir.basename($_FILES['imageToUpload']['name']);
			
			
			$output=0;
			/////////////////////DATABASE ENTRY//////////////////////////////
			$target_file1='/cart/'.$target_file;
			$sql="INSERT INTO product (name,image,description,price) VALUES('$name','$target_file1','$description','$price') ";
			$res=mysqli_query($conn,$sql);
			if(!$res)
				header('Location:index.php?action=error&name='.$name);
			else
			{
				move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file);
				header('Location:index.php?action=added&name='.$name);
			}
			
?>