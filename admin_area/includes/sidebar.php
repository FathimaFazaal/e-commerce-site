<?php


if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {




?>

    <nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Starts -->

        <div class="navbar-header"><!-- navbar-header Starts -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-ex1-collapse Starts -->


                <span class="sr-only">Toggle Navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>


            </button><!-- navbar-ex1-collapse Ends -->

            <a class="navbar-brand" href="index.php?dashboard">Admin Panel</a>


        </div><!-- navbar-header Ends -->

        <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav Starts -->

            <li class="dropdown"><!-- dropdown Starts -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle Starts -->

                    <i class="fa fa-user"></i>

                    <?php echo $admin_name; ?> <b class="caret"></b>


                </a><!-- dropdown-toggle Ends -->

                <ul class="dropdown-menu"><!-- dropdown-menu Starts -->

                    <li><!-- li Starts -->

                        <a href="index.php?user_profile=<?php echo $admin_id; ?>">

                            <i class="fa fa-fw fa-user"></i> Profile


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_products">

                            <i class="fa fa-fw fa-envelope"></i> Products

                            <span class="badge"><?php echo $count_products; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_customers">

                            <i class="fa fa-fw fa-gear"></i> Customers

                            <span class="badge"><?php echo $count_customers; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_p_cats">

                            <i class="fa fa-fw fa-gear"></i> Product Categories

                            <span class="badge"><?php echo $count_p_categories; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li class="divider"></li>

                    <li><!-- li Starts -->

                        <a href="logout.php">

                            <i class="fa fa-fw fa-power-off"> </i> Log Out

                        </a>

                    </li><!-- li Ends -->

                </ul><!-- dropdown-menu Ends -->




            </li><!-- dropdown Ends -->


        </ul><!-- nav navbar-right top-nav Ends -->

        <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

            <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

                <li><!-- li Starts -->

                    <a href="index.php?dashboard">

                        <i class="fa fa-fw fa-dashboard"></i> Dashboard

                    </a>

                </li><!-- li Ends -->

                <li><!-- Products li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#products">

                        <i class="fa fa-fw fa-table"></i> Products

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="products" class="collapse">

                        <li>
                            <a href="index.php?insert_product"> Insert Products </a>
                        </li>

                        <li>
                            <a href="index.php?view_products"> View Products </a>
                        </li>


                    </ul>

                </li><!-- Products li Ends -->

                <li><!-- Bundles Li Starts --->

                    <a href="#" data-toggle="collapse" data-target="#bundles">

                        <i class="fa fa-fw fa-edit"></i> Bundles

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a>

                    <ul id="bundles" class="collapse">

                        <li>
                            <a href="index.php?insert_bundle"> Insert Bundle </a>
                        </li>

                        <li>
                            <a href="index.php?view_bundles"> View Bundles </a>
                        </li>

                    </ul>

                </li><!-- Bundles Li Ends --->

                <!-- <li>

<a href="#" data-toggle="collapse" data-target="#relations">

<i class="fa fa-fw fa-retweet"></i> Assign Products To Bundles Relations

<i class="fa fa-fw fa-caret-down"></i>

</a>

<ul id="relations" class="collapse">

<li>

<a href="index.php?insert_rel"> Insert Relation </a>

</li>


<li>

<a href="index.php?view_rel"> View Relations </a>

</li>

</ul>


</li> -->



                <li><!-- manufacturer li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#manufacturers"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-briefcase"></i> Brands

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a><!-- anchor Ends -->

                    <ul id="manufacturers" class="collapse"><!-- ul collapse Starts -->

                        <li>
                            <a href="index.php?insert_manufacturer"> Insert Brand </a>
                        </li>

                        <li>
                            <a href="index.php?view_manufacturers"> View Brands </a>
                        </li>

                    </ul><!-- ul collapse Ends -->


                </li><!-- manufacturer li Ends -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#p_cat">

                        <i class="fa fa-fw fa-pencil"></i> Categories

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="p_cat" class="collapse">

                        <li>
                            <a href="index.php?insert_p_cat"> Insert Category </a>
                        </li>

                        <li>
                            <a href="index.php?view_p_cats"> View Categories </a>
                        </li>


                    </ul>

                </li><!-- li Ends -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#cat">

                        <i class="fa fa-fw fa-arrows-v"></i> Sub Categories

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a>

                    <ul id="cat" class="collapse">

                        <li>
                            <a href="index.php?insert_cat"> Insert Sub Category </a>
                        </li>

                        <li>
                            <a href="index.php?view_cats"> View Sub Categories </a>
                        </li>


                    </ul>

                </li><!-- li Ends -->



                <!-- <li> store section li Starts -->

                <!-- <a href="#" data-toggle="collapse" data-target="#store">

                        <i class="fa fa-fw fa-briefcase"></i> Stores -->

                <!-- <i class="fa fa-fw fa-caret-down"></i>

                    </a>

                    <ul id="store" class="collapse"> -->
                <!-- 
                        <li>
                            <a href="index.php?insert_store"> Insert store </a>
                        </li>

                        <li>
                            <a href="index.php?view_store"> View store </a>
                        </li>

                    </ul> -->

                <!-- </li>store section li Ends -->







                <li><!-- Coupons Section li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#coupons"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-arrows-v"></i> Coupons

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- anchor Ends -->

                    <ul id="coupons" class="collapse"><!-- ul collapse Starts -->

                        <li>
                            <a href="index.php?insert_coupon"> Insert Coupon </a>
                        </li>

                        <li>
                            <a href="index.php?view_coupons"> View Coupons </a>
                        </li>

                    </ul><!-- ul collapse Ends -->

                </li><!-- Coupons Section li Ends -->







                <li>

                    <a href="index.php?view_customers">

                        <i class="fa fa-fw fa-edit"></i> View Customers

                    </a>

                </li>

                <li>

                    <a href="index.php?view_orders">

                        <i class="fa fa-fw fa-list"></i> View Orders

                    </a>

                </li>

                <li>

                    <a href="index.php?view_payments">

                        <i class="fa fa-fw fa-pencil"></i> View Payments

                    </a>

                </li>

                <li>

                    <a href="index.php?view_inventory">

                        <i class="fa fa-list"></i> View Inventory

                    </a>

                </li>

                <!-- Report li Starts -->

                <!-- <li>
                    

                    <a href="index.php?report">

                        <i class="fa fa-fw fa-edit"></i> Reports

                    </a>

                </li> -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#reports">

                        <i class="fa fa-fw fa-file"></i> Reports

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a>

                    <ul id="reports" class="collapse">

                        <li>
                            <a href="index.php?sales_report"> Sales Order Report</a>
                        </li>

                        <li>
                            <a href="index.php?products_report"> Products Report</a>
                        </li>

                        <li>
                            <a href="index.php?best_customers"> Best Customers Report</a>
                        </li>


                    </ul>

                </li><!-- li Ends -->


                <!-- Report li Ends -->
                <li><!-- about us li Starts -->

                    <a href="index.php?edit_about_us">

                        <i class="fa fa-fw fa-edit"></i>About Us

                    </a>

                </li><!-- about us li Ends -->

                <li><!-- contact us li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-pencil"> </i> Contact Us

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- anchor Ends -->

                    <ul id="contact_us" class="collapse">

                        <li>

                            <a href="index.php?edit_contact_us"> Edit Contact Us </a>

                        </li>

                        <li>

                            <a href="index.php?insert_enquiry"> Insert Enquiry Type </a>

                        </li>

                        <li>

                            <a href="index.php?view_enquiry"> View Enquiry Types </a>

                        </li>

                    </ul>
                </li><!-- contact us li Ends -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#users">

                        <i class="fa fa-fw fa-gear"></i> Users

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="users" class="collapse">

                        <li>
                            <a href="index.php?insert_user"> Insert User </a>
                        </li>

                        <li>
                            <a href="index.php?view_users"> View Users </a>
                        </li>

                        <li>
                            <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit Profile </a>
                        </li>

                    </ul>

                </li><!-- li Ends -->

                <li><!-- li Starts -->

                    <a href="logout.php">

                        <i class="fa fa-fw fa-power-off"></i> Log Out

                    </a>

                </li><!-- li Ends -->

            </ul><!-- nav navbar-nav side-nav Ends -->

        </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>