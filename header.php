
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
    .navbar {
    margin-bottom: 0;
    background-color: lightsalmon;
    z-index: 9999;
    border: 0;
    font-size: 15px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    }

    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }

    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #f4511e !important;
        background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
  </style>
</head>
<body bgcolor="#FAF0E6">
<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Shopping Cart</a>
		</div>
	  <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="insert.php">Add Product</a></li>
      <li><a href="viewcart.php">Your Cart
      	<span class="badge" id="comparison-count">
      		<?php $count=count($_SESSION['cart_items']);echo $count; ?>
      	</span>
      </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">About US</a></li>
      <li><a href="#">Contact US</a></li>
    </ul>
    </div>
</nav>
</body>
</html>