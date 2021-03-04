<?php
	session_start();
	  if(isset($_SESSION['cart']))
	  {
		  $count=count($_SESSION['cart']);
	  }
	  else
	  {
		  $count=0;
	  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<h1 style="text-align:right"><a href="mycart.php" style="text-decoration:none;color:grey"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> </a><?php echo $count; ?></h1>
<div class="row">
<div class="col-lg-3">
<form action="managecart.php" method="POST" >
<div class="card" style="width: 18rem;">
  <img src="images/biscuit.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Biscuit</h5>
    <p class="card-text">Price:34</p>
	<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To cart</button>
    <input type="hidden" name="Item_Name" value="Biscuit">
	<input type="hidden" name="Price" value="34">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php" method="POST" >
<div class="card" style="width: 18rem;">
  <img src="images/barley.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Barley</h5>
    <p class="card-text">Price:56</p>
	<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To cart</button>
    <input type="hidden" name="Item_Name" value="Barley">
	<input type="hidden" name="Price" value="56">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php" method="POST" >
<div class="card" style="width: 18rem;">
  <img height=290 src="images/jowar.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Jowar</h5>
    <p class="card-text">Price:52</p>
	<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To cart</button>
    <input type="hidden" name="Item_Name" value="Jowar">
	<input type="hidden" name="Price" value="52">
  </div>
</div>
</form>
</div>
<div class="col-lg-3">
<form action="managecart.php" method="POST" >
<div class="card" style="width: 18rem;">
  <img src="images/mustard.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mustard</h5>
    <p class="card-text">Price:58</p>
	<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To cart</button>
    <input type="hidden" name="Item_Name" value="Mustard">
	<input type="hidden" name="Price" value="58">
  </div>
</div>
</form>
</div>

</div>
</div>
</body>

</html>