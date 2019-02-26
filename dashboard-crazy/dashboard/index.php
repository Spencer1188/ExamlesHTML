<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
	<?php include "assets/php/header.php"; ?>
	<style>
	
		.login-area{
			height: 100%;
			width: 100%;
			background-image: url(assets/images/bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
	
	</style>
</head>

<body id="login">
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post" action="assets/php/login.php">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Admin Page for Crazy-Pictures</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="Mail">Email address</label>
                            <input type="email" id="Mail" name="mail">
                            <i class="ti-email"></i>
                        </div>
                        <div class="form-gp">
                            <label for="Pw">Password</label>
                            <input type="password" id="Pw" name="pw">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </div>
                        </div>
						<div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

	<?php include "assets/php/footer-js.php"; ?>
</body>
</html>