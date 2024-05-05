      <style>
          .btn-dathang {
              padding: 10px 4px;
              color: #fff;
              background-color: rgba(40, 58, 90, 0.9);
              border: none;
              border-radius: 4px 0 4px 0;
          }

          .btn-dathang:hover {
              background-color: #2b7ab7;
          }
          .minus{
            padding: 0 4px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 4px;
          }
          .plus{
            padding: 0 4px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 4px;
          }
      </style>
      <?php
        // Lấy thông tin khách hàng từ cơ sở dữ liệu
        $conn = connect_db();
        $sql = "SELECT fullname, address, email, phonenumber FROM tbl_admin WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $_SESSION['id']);
        $stmt->execute();
        $customer = $stmt->fetch(PDO::FETCH_ASSOC);


        if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        ?>
          <main id="main">
              <div id="payment" class="container-cart-payment row mb">
                  <div class="boxtrai mr">
                      <div class="row mb">
                          <a class="home-return-link" href="index.php">
                              Trở về trang chủ
                          </a>
                          <h2>Giỏ hàng của bạn</h2>
                          <?php
                            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                                echo '
                                <form method="post">
                                <table style="border-collapse:collapse;text-align:center;width="100%"">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Hành động</th>
                                </tr>
                                ';
                                $i = 0;
                                $tong = 0;
                                foreach ($_SESSION['giohang'] as $item) {
                                    $gia =  floatval(str_replace(',', '', $item[3]));
                                    $t_tien = $gia * $item[4];
                                    $tong += $t_tien;
                                    $sl = $item[4];
                                    if (isset($_POST['minus-cart']) && ($_POST['minus-cart'] == $i)) {
                                        // decrease the quantity by one if the minus button is clicked
                                        $sl = max($sl - 1, 1);
                                    } else if (isset($_POST['plus-cart']) && ($_POST['plus-cart'] == $i)) {
                                        // increase the quantity by one if the plus button is clicked
                                        $sl = $sl + 1;
                                    }
                                    echo '<tr>
                                        <td>' . ($i + 1) . '</td>
                                        <td>' . $item[1] . '</td>
                                        <td><img src="A5/upload/' . $item[2] . '" width="100px"></td>
                                        <td>' . $item[3] . '</td>
                                        <td>
                                        <input type="hidden" name="cart-index" value="' . $i . '">
                                        <button type="submit" name="minus-cart" value="' . $i . '" class="minus bi bi-dash"></button>
                                        <span>' . $sl . '</span>
                                        <button type="submit" name="plus-cart" value="' . $i . '" class="plus bi bi-plus-lg"></button>
                                        </td>
                                        <td>' . number_format($t_tien) . '</td>
                                        <td><a href="index.php?act=delcart&i=' . $i . '">Xóa</a></td>
                                    </tr>';
                                    $_SESSION['giohang'][$i][4] = $sl;
                                    $i++;
                                }
                                echo '                        
                                    <tr>
                                        <td colspan="5">TỔNG ĐƠN HÀNG</td>
                                        <td style="background-color: #333;color:#fff;">' . number_format($tong) . '</td>
                                        <td></td>
                                    </tr>';
                                echo '</table>
                                </form>';
                            }
                            ?>

                      </div>
                      <div class="row mb">
                          <a class="countinute_order" href="index.php">Tiếp tục mua hàng</a>
                          <!-- <a class="countinute_order" href="payorder.php">Thanh Toán</a> -->
                          <!-- <a class="delete_all" href="index.php?act=delcart"> Xóa giỏ hàng</a> -->
                      </div>
                  </div>
                  <div class="col-md-8 order-md-1">
                      <h3 class="mb-3">Thông tin khách hàng</h3>
                      <form class="needs-validation" method="post" action="index.php?act=thanhtoan">
                          <input type="hidden" name="tongdonhang" value="<?= $tong ?>">
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="kh_ten">Họ tên</label>
                                  <input type="text" class="form-control" name="fullname" id="kh_ten" value="<?php echo $customer['fullname'] ?>">
                              </div>
                              <div class="col-md-12">
                                  <label for="kh_diachi">Địa chỉ mới</label>
                                  <input type="text" class="form-control" name="address" id="kh_diachi" value="<?php echo $customer['address'] ?>">
                                  <input type="checkbox" name="diachicu" value="<?php echo $customer['address'] ?>">
                                  <label for="diachi_hientai">Sử dụng địa chỉ cũ</label>
                              </div>
                              <div class="col-md-12">
                                  <label for="kh_dienthoai">Điện thoại</label>
                                  <input type="text" class="form-control" name="tell" id="kh_dienthoai" value="<?php echo $customer['phonenumber'] ?>">
                              </div>
                              <div class="col-md-12">
                                  <label for="kh_email">Email</label>
                                  <input type="text" class="form-control" name="email" id="kh_email" value="<?php echo $customer['email'] ?>">
                              </div>

                              <h3 class="mb-3" style="margin-top:20px">Hình thức thanh toán</h3>
                              <div class="d-block my-3">
                                  <div class="custom-control custom-radio">
                                      <input id="httt-1" name="pttt" type="radio" class="custom-control-input" required="" value="1">
                                      <label class="custom-control-label" for="httt-1">Online</label>
                                  </div>
                                  <div class="custom-control custom-radio">
                                      <input id="httt-2" name="pttt" type="radio" class="custom-control-input" required="" value="2">
                                      <label class="custom-control-label" for="httt-2">Ship COD</label>
                                  </div>
                              </div>
                              <hr class="mb-4">
                              <input type="submit" class="btn-dathang" name="dathang" value="Đặt hàng">
                          </div>
                      </form>
                  </div>


          </main>
      <?php } else {
            echo '
            <a class="home-return-link" href="index.php">
            <i class="home-return-icon-pro bi bi-house-door"></i>
            </a>
            <main id="main" class="empty_cart">
            <h1>Giỏ hàng rỗng</h1>
            <p>Hiện tại giỏ hàng của bạn đang trống. Hãy quay lại trang chủ để mua sắm thêm nhé!</p>
            <a href="index.php">Quay lại trang chủ</a>
        
            </main>';
        } ?>
      <!-- End #main -->
      <script>
          function dathangthanhcong() {
              alert("Đặt hàng thành công");
          }
      </script>