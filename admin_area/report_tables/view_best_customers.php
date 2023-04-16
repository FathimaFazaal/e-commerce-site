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

<i class="fa fa-dashboard"></i> Dashboard / Best Customers

</li>

<form  method="post" action="report_templates/view_best_customers_template.php">
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

<i class="fa fa-money fa-fw"></i> View Best Customers

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts --->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Customer Name</th>
<th>Email</th>
<th>No Of Valid Orders</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php


$get_customers = "SELECT customers.customer_name as name,customers.customer_email as email, COUNT(customer_orders.order_id) as orders FROM customer_orders,customers WHERE customer_orders.customer_id = customers.customer_id ORDER BY orders DESC";

$run_customers = mysqli_query($con,$get_customers);

while($row_customers = mysqli_fetch_array($run_customers)){

$name = $row_customers['name'];

$email = $row_customers['email'];

$orders = $row_customers['orders'];


?>

<tr>

<td><?php echo $name; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $orders; ?></td>

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