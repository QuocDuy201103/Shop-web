<main id="main">
    <div id="payment" class="container-cart-payment row mb">
        <div class="boxtrai mr">
            <div class="row mb">
                <a class="home-return-link" href="index.php?act=donhangkhach">
                    Trở về trang đơn hàng của bạn
                </a>
                <h3 class="mb-3">Chi tiết đơn đặt hàng<i style="color: green;" class="bi bi-bag-check"></i></h3>
                <div class="row mb10 frmdsloai">
                <table style="border-collapse:collapse;text-align:center;">
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php
                        if (isset($orderdetail)) {
                            $i = 0;
                            foreach ($orderdetail as $item) {
                                $t_tien = $item['dongia'] * $item['soluong'];
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
                        }
                        ?>
                    </table>
                </div>
            </div>

        </div>


    </div>
</main>