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

$html .= "<h3 style='text-align:center; background-color:#f2f2f2'>Products Report</h3>";

$html .= "<table style='width:100%'>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Image</th>
<th>Product Category</th>
<th>Price</th>
<th>Quantity Available</th>
</tr>";

$get_products = "SELECT * FROM products,product_categories where products.p_cat_id = product_categories.p_cat_id";

$run_products = mysqli_query($con, $get_products);

while ($row_products = mysqli_fetch_array($run_products)) {

  $product_id = $row_products['product_id'];

  $product_title = $row_products['product_title'];

  $product_img1 = $row_products['product_img1'];

  $p_cat_title = $row_products['p_cat_title'];

  $product_price = $row_products['product_price'];

  $product_quantity = rand(10, 100);

  $html .= "<tr>

<td>$product_id</td>
<td>$product_title</td>
<td><img src='../product_images/$product_img1' width='60' height='60'></td>
<td>$p_cat_title</td>
<td>$ $product_price</td>
<td>$product_quantity</td>

</tr>";
}

$html .= "</table>";

$options = new Options;
// $options->setChroot(__DIR__);
$options->setChroot("F:/xampp/htdocs/e-commerce-site/admin_area");

$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("products.pdf", ["Attachment" => 0]);
