<?php
session_start();
ob_start();
include "../model/connect_db.php";
include "../model/admin.php";
if ((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = checkadmin($username, $password);
    $_SESSION['role'] = $role;

    if ($role == 1) {
        // $_SESSION['idadmin'] = $role[0]['idadmin'];
        $_SESSION['usernameadmin'] = $username;
        header('location: index.php');
    } else {
        $txt_error = "Tài khoản của bạn không có quyền admin";
        // header('location: login_admin.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/Vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="./assets/images/img-01.png" alt="IMG">
                </div>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="login100-form validate-form">
                    <span class="login100-form-title">
                        Đăng Nhập Admin
                    </span>
                    <?php
                    if ((isset($txt_error)) && ($txt_error != "")) {
                        echo "<font color='red'>" . $txt_error . "</font>";
                    }
                    ?>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" name="dangnhap" value="Đăng Nhập">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->
    <script src="./assets/Vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/Vendor/bootstrap/js/popper.js"></script>
    <script src="./assets/Vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/Vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./assets/Vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

</body>

</html>