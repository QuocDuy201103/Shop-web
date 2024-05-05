<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Ký</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="css/util.css">
            <link rel="stylesheet" type="text/css" href="css/main.css">
            <!--===============================================================================================-->

            <!-- js -->
            <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
            <!--===============================================================================================-->
            <script src="js/validation.js" defer></script>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form id="signup" action="success-register.php" method="post" class="login100-form validate-form" novalidate>
                    <span class="login100-form-title">
						Đăng Ký
					</span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" id="name"  name="name" placeholder="Tên đăng nhập">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" id="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" id="password" name="pass" placeholder="Nhập mật khẩu">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" id="password_confirmation" name="rp-pass" placeholder="Nhập lại mật khẩu">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" name="dang-ky" value="Đăng Ký">
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="login.php">
							Trở về đăng nhập
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>

</html>