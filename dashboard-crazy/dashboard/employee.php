<!doctype html>
<html class="no-js" lang="en">
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard - Employee</title>
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
							<li><a href="#"><i class="ti-user"></i> <span>Employees</span></a></li>
                            <li><a href="events.php"><i class="ti-calendar"></i> <span>Events</span></a></li>
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
                <div class="row">
                    <!-- table dark start -->
                    <div class="col-lg-12 mt-12">
                        <div class="card">
                            <div class="card-body row">
                                <h4 class="header-title col-9">Employees</h4>
                                <div class="single-table col-12">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-dark">
                                                <tr class="text-white">
                                                    <th scope="col">Firstname</th>
                                                    <th scope="col">Lastname</th>
                                                    <th scope="col">Mail</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
										<?php
												$sql = "SELECT * FROM users";
												$result = $conn->query($sql);

												if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
										?>
                                                <tr>
                                                    <td scope="row"><?php echo $row["Firstname"]; ?></td>
                                                    <td><?php echo $row["Lastname"]; ?></td>
                                                    <td><?php echo $row["Email"]; ?></td>
                                                    <td><i class="ti-trash" onClick="delte_user(<?php echo $row["Id"]; ?>)"></i></td>
                                                </tr>
										<?php
													}
												}
										?>
												<tr>
													<td colspan="4">
														<button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add User</button>
													</td>
												</tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table dark end -->
					
					<?php include "modal/newuser_modal.php"; ?>
                   
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

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	<script>
		
		function delte_user(id){
			window.location = "assets/php/delete_user.php?id="+id;
		}
				
	</script>
</body>

</html>
