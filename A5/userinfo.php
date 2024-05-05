<?php
// include "A5/model/user_admin.php";
if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
    $userinfo = get_user_info($_SESSION['username']);
}
?>
<style>
    .main-info-user {
        margin: 60px auto;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .item-info-user {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-update-info {
        width: 98%;
        margin: 14px auto;
    }
</style>
<main id="main" class="main-info-user">
    <div id="payment" class="container-cart-payment row mb">
    <a class="home-return-link" href="index.php">
                    Trở về trang chủ
                </a>
        <div class="item-info-user">
            <div class="col-md-8 order-md-1">
                <h2>Thông tin tài khoản của bạn</h2>
                <form class="needs-validation" name="infouser" method="post" action="index.php?act=updateInfoUserForm">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="kh_ten">Họ tên</label>
                            <input type="text" class="form-control" name="fullname" id="kh_fullname" value="<?= $userinfo['fullname'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_username">Tên đăng nhập</label>
                            <input type="text" class="form-control" name="username" id="kh_username" value="<?= $userinfo['username'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="kh_password" value="<?= $userinfo['password'] ?>">
                            <input type="checkbox" value="" id="show-password-toggle">
                            <label for="show-pass">Hiện mật khẩu</label>
                        </div>
                        <div class="col-md-12">
                            <label for="kh_diachi">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="kh_address" value="<?= $userinfo['address'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_dienthoai">Điện thoại</label>
                            <input type="text" class="form-control" name="phonenumber" id="kh_phonenumber" value="<?= $userinfo['phonenumber'] ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="kh_email">Email</label>
                            <input type="text" class="form-control" name="email" id="kh_email" value="<?= $userinfo['email'] ?>">
                        </div>

                        <input type="submit" class="btn btn-primary btn-lg btn-update-info" name="update-info" value="Cập nhật thông tin" onclick="updatesuccess()">
                    </div>
                </form>
            </div>
        </div>
</main>
<script>
    const passwordInput = document.getElementById("kh_password");
    const showPasswordToggle = document.getElementById("show-password-toggle");

    showPasswordToggle.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordToggle.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            showPasswordToggle.textContent = "Show";
        }
    });

    function updatesuccess() {
        alert("Cập nhật thành công");
    }
</script>