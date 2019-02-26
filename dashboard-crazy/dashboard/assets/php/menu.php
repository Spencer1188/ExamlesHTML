 			<div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
					<h4 class="col-sm-2">Dashboard</h4>
                    <div class="col-sm-10 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/team/<?php echo $_SESSION["imgsrc"]; ?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
								<?php echo $_SESSION["usrvname"] . " " .$_SESSION["usrnname"];?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="assets/php/logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>