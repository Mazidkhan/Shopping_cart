<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<?php session_start(); ?>
<br><br>
<div class="container">
<div class="row">
<div class="col-lg-8">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php
  $total=0;
  $i=0;
  if(isset($_SESSION['cart'])){
  foreach($_SESSION['cart'] as $key=>$value){
	  $total=$total+$value['Price'];
	  echo "
	  <tr>
	  <td>1</td>
	  <td>$value[Item_Name]</td>
	  <td>$value[Price]</td>
	  <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
	  <td>
	  <form action='managecart.php' method='POST'>
	  <button name='Remove_Item' class='btn btn-sm btn-danger'>Remove</button>
	  <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
	  </form>
	  </td>
	  </tr>
	  ";
	  $i++;
  }
  }
  ?>
  </tbody>
</table>
</div>
<div class="col-lg-4">
<div class="border bg-light rounded p-4">
<form method="POST">
<h3>Total Price:</h3>
<h5 class="text-right"><?php echo $total;?></h5>
</form>
</div>
</div>
</div>
</div>
</body>
</html>