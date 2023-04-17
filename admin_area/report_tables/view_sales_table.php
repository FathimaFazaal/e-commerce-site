<?php



if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb space-adjustment"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / View Sales Order

                </li>

                <form method="post" action="report_templates/view_sales_template.php">
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

                        <i class="fa fa-money fa-fw"></i> View Sales Order

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <div class="table-responsive"><!-- table-responsive Starts --->

                        <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

                            <thead><!-- thead Starts -->

                                <tr>

                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Order Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>

                                </tr>

                            </thead><!-- thead Ends -->

                            <tbody><!-- tbody Starts -->

                                <?php


                                $get_sales = "SELECT customer_orders.order_id,customers.customer_name,customer_orders.order_date,customer_orders.due_amount,customer_orders.order_status FROM customer_orders ,customers  WHERE customer_orders.customer_id = customers.customer_id";

                                $run_sales = mysqli_query($con, $get_sales);

                                while ($row_sales = mysqli_fetch_array($run_sales)) {

                                    $order_id = $row_sales['order_id'];

                                    $customer_name = $row_sales['customer_name'];

                                    $order_date = $row_sales['order_date'];

                                    $due_amount = $row_sales['due_amount'];

                                    $order_status = $row_sales['order_status'];


                                ?>

                                    <tr>

                                        <td><?php echo $order_id; ?></td>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $order_date; ?></td>
                                        <td>Rs <?php echo $due_amount; ?></td>
                                        <td><?php echo $order_status; ?></td>

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