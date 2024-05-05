<main id="main">
    <div id="payment" class="container-cart-payment row mb">
        <div class="boxtrai mr">
            <div class="row mb">
            <a class="home-return-link" href="index.php">
                    Trở về trang chủ
                </a>
                <h3 class="mb-3">Đặt hàng thành công<i style="color: green;" class="bi bi-bag-check"></i></h3>
                <?php
                if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                    $getshowcart = getshowcart($_SESSION['iddh']);
                    if ((isset($getshowcart)) && (count($getshowcart) > 0)) {
                        echo '
                        <table style="border-collapse:collapse;text-align:center;">
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>

                        </tr>
                        ';
                        $i = 0;
                        $tong = 0;
                        foreach ($getshowcart as $item) {
                            $t_tien = $item['dongia'] * $item['soluong'];
                            $tong += $t_tien;
                            echo '<tr>
                                    <td>' . ($i + 1) . '</td>
                                    <td>' . $item['tensp'] . '</td>
                                    <td><img src="A5/upload/' . $item['img'] . '" width="100px"></td>
                                    <td>' . number_format($item['dongia']) . '</td>
                                    <td>' . $item['soluong'] . '</td>
                                    <td>' . number_format($t_tien) . '</td>
                                </tr>';
                            $i++;
                        }

                        echo '                        
                        <tr>
                            <td colspan="5">TỔNG ĐƠN HÀNG</td>
                            <td style="background-color: #333;color:#fff;">' . number_format($tongdonhang) . '</td>
                        </tr>';
                        echo '</table>';
                    }

                ?>
            </div>

        </div>

        <div class="col-md-8 order-md-1">
            <?php
                    if (isset($_SESSION['iddh']) && ($_SESSION['iddh'] > 0)) {
                        $orderinfo = getorderinfo($_SESSION['iddh']);
                        if (count($orderinfo) > 0) {



            ?>
                    <form class="needs-validation" name="frmthanhtoan" method="post" action="index.php?act=thanhtoan">
                        <input type="hidden" name="tongdonhang" value="<? $tong ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Mã đơn hàng</label>
                                <input type="text" class="form-control" name="madon" id="madon" value="<?= $orderinfo[0]['madonhang'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="fullname" id="kh_ten" value="<?= $orderinfo[0]['name'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" id="kh_diachi" value="<?= $orderinfo[0]['address'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="tell" id="kh_dienthoai" value="<?= $orderinfo[0]['tell'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" id="kh_email" value="<?= $orderinfo[0]['email'] ?>" readonly>
                            </div>
                            <?php
                            switch ($orderinfo[0]['phuongthucthanhtoan']) {
                                case '1':
                                    $txtmess = "Online";
                                    break;
                                case '2':
                                    $txtmess = "Ship COD";
                                    break;

                                default:
                                    $txtmess = "Quý khách chưa chọn phương thức thanh toán";
                                    break;
                            }
                            echo '
                            <div class="col-md-12">
                                <label for="kh_email">Hình thức thanh toán</label>
                                <input type="text" class="form-control" name="phuongthuc" id="phuongthuc" value="' . $txtmess . '" readonly>
                            </div>
                                    ';
                            ?>
                        </div>
                    </form>
            <?php
                        }
                    } ?>
        </div>
    </div>
</main>
<?php
                } else {
                    echo '
        <a class="home-return-link" href="index.php">
        <i class="home-return-icon-pro bi bi-house-door"></i>
        </a>
        <main id="main" class="empty_cart">
        <h1>Giỏ hàng rỗng</h1>
        <p>Hiện tại giỏ hàng của bạn đang trống. Hãy quay lại trang chủ để mua sắm thêm nhé!</p>
        <a href="index.php">Quay lại trang chủ</a>
        </main>';
                }

?>