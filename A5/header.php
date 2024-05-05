<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cửa hàng nước hoa KDN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="A5/assets/img/clients/perfume.png" rel="icon">
    <link href="A5/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="A5/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="A5/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="A5/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="A5/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="A5/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="A5/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="A5/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="A5/assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="A5/assets/css/grid.css"> -->
    <!-- <link rel="stylesheet" href="A5/assets/css/main.css">
    <link rel="stylesheet" href="A5/assets/css/timkiemnangcao.css">
    <link rel="stylesheet" href="A5/assets/js/product.js">
    <link rel="stylesheet" href="A5/Login_v1/fonts/themify-icons/themify-icons.css"> -->





</head>
<style>
    .logo-of-gr {
        margin-bottom: 10px;
    }

    .from-search {
        font-family: "Open Sans", sans-serif;
    }

    .input-search {
        border: 1px solid #47b2e4;
        border-radius: 2px;
        padding: 2px;
        color: #000;
        border: none;
    }

    /* .input-search:hover{
        border: 1px solid #2b7ab7;
    } */
    .btn-search-pro {
        padding: 0;
        border: none;
        background: none;
    }

    /* .btn-search:hover{
        color: #fff;
        background-color: #000;
        border: 1px solid #2b7ab7;
    } */
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <img src="A5/assets/img/clients/LOGO5.png" alt="" class="logo-of-gr" style="font-size: 40px;">
                <a href="#" class="trademark">KDN</a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul id="nav-ul">
                    <li>
                        <a class="nav-link scrollto active">
                            <form method="post" action="index.php?act=search" class="from-search">
                                <input class="input-search" type="text" name="keyword" placeholder="Nhập từ khóa">
                                <button class="btn-search-pro" type="submit" name="search"><i class="bi bi-search"></i></button>
                            </form>
                        </a>
                    </li>
                    <li><a class="nav-link scrollto active" href="index.php">Trang chủ</a></li>
                    <li class="dropdown"><a href="#portfolio"><span>Thương hiệu</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php
                            foreach ($dsdm as $item) {
                                echo '<li><a href="index.php?act=product&id=' . $item['id'] . '">' . $item['tendanhmuc'] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php?act=advancesearch">Sản phẩm</a></li>

                    <?php
                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                        echo '<li class="dropdown"><a><i class="bi bi-person"></i><span>' . $_SESSION['username'] . '</span><i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="index.php?act=userinfo">Thông tin cá nhân</a></li>
                                <li><a href="index.php?act=donhangkhach">Đơn hàng của bạn</a></li>
                            </ul>
                            </li>';
                        echo '<li><a class="nav-link scrollto" href="index.php?act=logout">Đăng Xuất</a></li>';
                        echo '
                            <li>
                                <a href="index.php?act=viewcart" class="getstarted scrollto btn btn-ouline-light">
                                    <i class="bi bi-cart shopping-cart-payment" style="font-size: 20px;margin:0 auto;font-weight:400;">
                                    </i>
                                </a>
                            </li>
                            ';
                    } else {
                    ?>

                        <li class="li-sign-up">
                            <a href="index.php?act=register" id="btn-dang-ky" class="btn-get-started scrollto js-sign-up">
                                Đăng Ký
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=login" id="btn-dang-nhap" class="btn-get-started scrollto js-login">
                                Đăng Nhập
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav>
            <!-- .navbar -->
        </div>

    </header>
    <!-- End Header -->