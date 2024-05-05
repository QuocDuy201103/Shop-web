<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="view/vendor/boxicons/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/admin.css">
    <title>Admin</title>
    <!-- Favicons -->
    <link href="view/img/perfume.png" rel="icon">
    <link href="view/img/apple-touch-icon.png" rel="apple-touch-icon">
    <style>
        .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 70px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
}
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="view/index.html">
                <img src="view/img/LOGO6.png" alt="">
            </a>
            <a href="view/index.html">
                <span class="logo_name">KDN</span>
            </a>
        </div>
        <ul class="nav-links">
            <li>
                <a href="index.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Chào</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=pageorder">
                <i class="bi bi-bag-check"></i>
                    <span class="links_name">Quản Lý Đơn Hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=danhmuc">
                <i class="bi bi-bookmark-check"></i>
                    <span class="links_name">Quản Lý Danh Mục</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=sanpham">
                <i class="bi bi-card-checklist"></i>
                    <span class="links_name">Quản Lý Sản Phẩm</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=nguoidung">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Quản Lý Người Dùng</span>
                </a>
            </li>

            <li class="log_out">
                <a href="index.php?act=thoat">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Đăng Xuất</span>
                </a>
            </li>
        </ul>
    </div>
    