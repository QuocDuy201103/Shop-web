<main id="main">
    <div id="payment" class="container-cart-payment row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <a class="home-return-link" href="index.php?act=donhangkhach">
                    Trở về trang chủ
                </a>
                <h3 class="mb-3">Đơn đặt hàng<i style="color: green;" class="bi bi-bag-check"></i></h3>
                <div class="row mb10 frmdsloai">
                    <table style="border-collapse:collapse;text-align:center;">
                        <tr>
                            <th>Mã đơn</th>
                            <th style="width:4%;">Tổng đơn</th>
                            <th>Phương thức thanh toán</th>
                            <th>Tên khách hàng</th>
                            <th>Tình trạng</th>
                            <th>Hành động</th>
                            <!-- <th>Email</th>
                            <th style="width:4%;">Số điện thoại</th> -->
                        </tr>
                        <?php
                        if (isset($orders) && (count($orders) > 0)) {
                            foreach ($orders as $order) {
                                $madonhang = $order['madonhang'];
                                $tongdonhang = $order['tongdonhang'];
                                $pttt = $order['phuongthucthanhtoan'];
                                switch ($pttt) {
                                    case '1':
                                        $txtmess = "Tiền mặt";
                                        break;
                                    case '2':
                                        $txtmess = "Chuyển khoản";
                                        break;
                                    case '3':
                                        $txtmess = "Ví MoMo";
                                        break;
                                    case '4':
                                        $txtmess = "Ship COD";
                                        break;

                                    default:
                                        $txtmess = "Quý khách chưa chọn phương thức thanh toán";
                                        break;
                                }
                                $iddonhang = $order['id'];
                                $iduser = $order['iduser'];
                                $fullname = $order['name'];
                                $address = $order['address'];
                                $email = $order['email'];
                                $tell = $order['tell'];
                                $status = $order['status'];
                                switch ($status) {
                                    case 'pending':
                                        $txt = 'Đang chờ xác nhận';
                                        break;
                                    case 'confirmed':
                                        $txt = 'Đã xác nhận';
                                        break;
                                    case 'canceled':
                                        $txt = 'Đã hủy';
                                        break;

                                    default:
                                        $txt = 'Đơn hàng không tồn tại';
                                        break;
                                }
                                echo '<tr>
                                <td>' . $madonhang . '</td>
                                <td>' . number_format($tongdonhang) . '</td>
                                <td>' . $txtmess . '</td>
                                <td>' . $fullname . '</td>
                                <td>' . $txt . '</td>
                                <td><a href="index.php?act=chitietdonhang&id=' . $iddonhang . '">Xem chi tiết</a>';
                                if ($status == 'pending' || $status == 'confirmed') {
                                    echo '<a style="margin-left:4px;" href="index.php?act=canceled&id=' . $iddonhang . '">Hủy đơn</a></td>';
                                }
                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            echo '<td colspan="6">Bạn chưa có đơn hàng nào</td>';
                        }
                        ?>
                    </table>
                </div>
            </div>

        </div>


    </div>
</main>