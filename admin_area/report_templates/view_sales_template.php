<?php

require "F:/xampp/htdocs/e-commerce-site/admin_area/vendor/autoload.php";
include("../includes/db.php");

use Dompdf\Dompdf;
use Dompdf\Options;

$html = "<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  white-space: nowrap;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>";

$html .= '<img src="F:/xampp/htdocs/e-commerce-site/admin_area/admin_images/logo.jpg" style="width: 10%"/><span style="margin-top: -50px">Everest Marketing PVT LTD</span>';

$html .= "<h3 style='text-align:center; background-color:#f2f2f2'>Sales Order Report</h3>";

$html .= "<table style='width:100%'>
<tr>
<th>Order ID</th>
<th>Customer</th>
<th>Order Date</th>
<th>Amount</th>
<th>Status</th>
</tr>";

$get_sales = "SELECT customer_orders.order_id,customers.customer_name,customer_orders.order_date,customer_orders.due_amount,customer_orders.order_status FROM customer_orders ,customers  WHERE customer_orders.customer_id = customers.customer_id";

$run_sales = mysqli_query($con, $get_sales);

while ($row_sales = mysqli_fetch_array($run_sales)) {

  $order_id = $row_sales['order_id'];

  $customer_name = $row_sales['customer_name'];

  $order_date = $row_sales['order_date'];

  $due_amount = $row_sales['due_amount'];

  $order_status = $row_sales['order_status'];

  $html .= "<tr>

<td>$order_id</td>
<td>$customer_name</td>
<td>$order_date</td>
<td>$due_amount</td>
<td>$order_status</td>

</tr>";
}

$html .= "</table>";

$options = new Options;
// $options->setChroot(__DIR__);
$options->setChroot("F:/xampp/htdocs/e-commerce-site/admin_area");

$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("sales.pdf", ["Attachment" => 0]);
