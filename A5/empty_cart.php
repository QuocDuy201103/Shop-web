<?php
unset($_SESSION['cart']); // xóa toàn bộ giỏ hàng trong session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shopping Payment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/clients/perfume.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<style>
    .logo-of-gr {
        margin-bottom: 10px;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
            <a class="home-return-link" href="../index.php">
                <i class="home-return-icon bi bi-arrow-return-left"></i>
            </a>
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <img src="./assets/img/clients/LOGO6.png" alt="" class="logo-of-gr" style="font-size: 40px;">
                <a href="../index.php">KDN</a>
            </h1>
            <nav id="navbar" class="navbar">
                <ul id="nav-ul">
                    <li><a class="nav-link scrollto active" href="#">Giỏ hàng</a></li>
                    <?php if (isset($user)): ?>
                    <li><a class="nav-link scrollto" href="#">
                        Hello <?= htmlspecialchars($user["name"]) ?>
                    </a></li>
                    <li><a class="nav-link scrollto" href="index.php?act=logout">Log out</a></li>
                    <?php else: ?>
                        <?php
                            header("Location: index.php");
                            exit();
                        ?>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav>
        
        </div>

    </header>
    <!-- End Header -->

    
    
        <main id="main" class="empty_cart">
        <h1>Giỏ hàng rỗng</h1>
	    <p>Hiện tại giỏ hàng của bạn đang trống. Hãy quay lại trang chủ để mua sắm thêm nhé!</p>
	    <a href="../index.php">Quay lại trang chủ</a>
    
        </main>
    <!-- End #main -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="./assets/js/main.js"></script>
</body>

</html>
