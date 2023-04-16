<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb space-adjustment"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Products

</li>

<form  method="post" action="report_templates/view_product_template.php">
<button class="btn_print" type="submit"><i class="fa fa-fw fa-file"></i> Print</button>
</form>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View Products

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts --->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Product ID</th>
<th>Product Name</th>
<th>Image</th>
<th>Product Category</th>
<th>Price</th>
<th>Quantity Available</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php


$get_products = "SELECT * FROM products,product_categories where products.p_cat_id = product_categories.p_cat_id";

$run_products = mysqli_query($con,$get_products);

while($row_products = mysqli_fetch_array($run_products)){

$product_id = $row_products['product_id'];

$product_title = $row_products['product_title'];

$product_img1 = $row_products['product_img1'];

$p_cat_title = $row_products['p_cat_title'];

$product_price = $row_products['product_price'];

?>

<tr>

<td><?php echo $product_id; ?></td>
<td><?php echo $product_title; ?></td>
<td><img src="product_images/<?php echo $product_img1; ?>" width="60" height="60"></td>
<td><?php echo $p_cat_title; ?></td>
<td>$ <?php echo $product_price; ?></td>
<td><?php echo rand (10,100) ?></td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends --->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>