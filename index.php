<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>
<body>

	<?php 
		include 'connect.php'; 
		include 'header.php'; 
		

		$page=isset($_GET['page'])?$_GET['page']:1;
		$max_item_per_page=8;

		$action=isset($_GET['action'])?$_GET['action']:"";

		if($action=="added")
		{
			echo "<div class='alert alert-info'>";
	        echo "<strong>".$_GET['name']."</strong> was added to your Website!";
	   	 	echo "</div>";
		}
		if($action=="error")
		{
			echo "<div class='alert alert-danger'>";
	        echo "<strong>".$_GET['name']."</strong> was not added to your Website. Something went wrong!!!";
	   	 	echo "</div>";
		}

		$sql = "select * from product LIMIT ".($page-1)*$max_item_per_page.",".($page)*$max_item_per_page;
		$products = mysqli_query($conn,$sql);
		echo "<div class='container-fluid'>";
		while($row=mysqli_fetch_array($products))
		{
			echo "<a href='viewproduct.php?id=".$row['id']."'>";
			echo "<div style='float:left;border:1px solid black;margin:10px;padding:10px;'><center>";
			echo '<img src="'.$row['image'].'" width="250px" height="250px" alt="">';
			echo '<br>'.$row['name'];
			echo '<br><b>Rs.'.$row['price'].'</b>';
			echo "<br><a href='addtocart.php?id={$row['id']}&name={$row['name']}' class='btn btn-info btn-lg'>
				<span class='glyphicon glyphicon-shopping-cart'></span>
				Add to Cart</a>";
			echo "</center></div>";
			echo "</a>";
		}
		echo '</div>';

		echo '<center><ul class="pagination">';
		$sqlp="SELECT COUNT(*) FROM product";
		$t=mysqli_query($conn,$sqlp);
		//print_r($t);
		while($total=mysqli_fetch_array($t)){
			$total1=$total['COUNT(*)'];
		}
		$total1=ceil($total1/$max_item_per_page);
		echo "<li><a href='index.php?page=1'>First</a></li>";
		for($i=1;$i<=$total1;$i++){
			echo "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
		}
		echo "<li><a href='index.php?page=".$total1."'>Last</a></li>";
		echo '</ul></center>';

	?>


</body>
</html>