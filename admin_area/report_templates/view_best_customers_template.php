<?php

require "C:/xampp/htdocs/e-commerce-site/admin_area/vendor/autoload.php";
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

$html .= '<img src="C:/xampp/htdocs/e-commerce-site/admin_area/admin_images/logo.jpg" style="width: 10%"/><span style="margin-top: -50px">Everest Marketing PVT LTD</span>';

$html .= "<h3 style='text-align:center; background-color:#f2f2f2'>Best Customers Report</h3>";

$html .= "<table style='width:100%'>
<tr>
<th>Customer Name</th>
<th>Email</th>
<th>No Of Valid Orders</th>
</tr>";

$get_customers = "SELECT customers.customer_name as name,customers.customer_email as email, COUNT(customer_orders.customer_id) as orders FROM customer_orders,customers WHERE customer_orders.customer_id = customers.customer_id GROUP BY customer_orders.customer_id ORDER BY orders DESC";

$run_customers = mysqli_query($con,$get_customers);

while($row_customers = mysqli_fetch_array($run_customers)){

$name = $row_customers['name'];

$email = $row_customers['email'];

$orders = $row_customers['orders'];

$html .= "<tr>

<td>$name</td>
<td>$email</td>
<td>$orders</td>

</tr>";

}

$html .= "</table>";

$options = new Options;
// $options->setChroot(__DIR__);
$options->setChroot("C:/xampp/htdocs/e-commerce-site/admin_area");

$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("bestCustomers.pdf",["Attachment"=>0]);

?>