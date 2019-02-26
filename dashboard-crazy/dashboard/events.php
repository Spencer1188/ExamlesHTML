<!doctype html>
<html class="no-js" lang="en">
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Table Basic - srtdash</title>
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<?php include "assets/php/header.php"; ?>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
		<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
							<li><a href="employee.php"><i class="ti-user"></i> <span>Employees</span></a></li>
                            <li><a href="#"><i class="ti-calendar"></i> <span>Events</span></a></li>
                            <li><a href="invoice.html"><i class="ti-gallery"></i> <span>Advertisement</span></a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            	<?php include "assets/php/menu.php"; ?>
				<?php include "assets/php/dbconfig.php"; ?>
			<br>
            <!-- page title area end -->
            <div class="main-content-inner">
				<!-- Dark table start -->
				<div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Dark</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Eventbilder</th>
                                                <th>Eventname</th>
                                                <th>Veranstalter</th>
                                                <th>Datum</th>
                                                <th>Fotos </th>
                                                <th>Aktiv</th>
												<th>Action</th>
												<th>Fotos</th>
                                            </tr>
                                        </thead>
                                        <tbody>
         								 <?php
												$sql = "SELECT * FROM events";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
										?>
                                                <tr>
                                                    <td scope="row">Bild</td>
                                                    <td><?php echo $row["eventname"]; ?></td>
                                                    <td><?php echo $row["veranstalter"]; ?></td>
													<td><?php echo $row["datum"]; ?></td>
													<td><i class="fa fa-minus-square"></i></td>
													<td><i class="fa fa-minus-square"></i></td>
                                                    <td style="font-size: 20px;">
														<i class="fa fa-trash-o"></i>
														<i class="fa fa-pencil-square-o"></i>
														<i class="fa fa-upload"></i>
													</td>
													<td>Keine Fotos online</td>
                                                </tr>
										<?php
													}
												}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                    <!-- Dark table end -->

                   
        <!-- main content area end -->
        <!-- footer area start-->
        <footer class="footer">
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
