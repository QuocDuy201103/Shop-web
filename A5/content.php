
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero " class="d-flex align-items-center">
    <div class="container  " data-aos="zoom-in">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>KDN Nơi Giúp Bạn Trở Nên Cuốn Hút Hơn</h1>
                <h2>Hương thơm cuốn hút mọi ánh nhìn</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="A5/assets/img/mĩ-nam-đại-diện-hình-ảnh-nước-hoa.jpg" class="img-fluid animated" alt="" style="border-radius:6px;">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/sauvage.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/boss.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/Gucci.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/diorhomme.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/chanel-no5-re.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="A5/assets/img/clients/Roja-Elysium-Parfum-Cologne.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section>
    <!-- End Cliens Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sản phẩm</h2>
                <p> “Cũng giống như nam giới, nước hoa không bao giờ hoàn hảo ngay lập tức, bạn phải để nó quyến rũ bạn”</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php
                if (isset($_GET['page']) && $_GET['page'] > 0) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $limit = 6;

                // Tính số lượng sản phẩm và số trang
                $sanpham = getall_sanpham(0, "");
                $total_records = count($sanpham);
                $so_trang = ceil($total_records / $limit);
                $start = ($page - 1) * $limit;
                $ds_sanpham = array_slice($sanpham, $start, $limit);
                showProduct($ds_sanpham);

                // Tính toán số trang trước và sau của trang hiện tại
                $previous_page = ($page > 1) ? $page - 1 : 1;
                $next_page = ($page < $so_trang) ? $page + 1 : $so_trang;
                $previous_page2 = ($page > 2) ? $page - 2 : 1;
                $next_page2 = ($page < $so_trang - 1) ? $page + 2 : $so_trang;

                //Hiển thị phân trang và các nút điều hướng trang
                if ($so_trang > 1) {
                    echo '<ul class="pagination">';
                    // Nút Trang đầu
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=1">Trang đầu</a></li>';
                    }
                    // Nút tiến lên 1 trang
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $previous_page . '"><<</a></li>';
                    }
                    // Hiển thị các nút trang
                    for ($i = 1; $i <= $so_trang; $i++) {
                        if ($i == $page) {
                            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    // Nút tiến lên 1 trang
                    if ($page < $so_trang) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $next_page . '">>></a></li>';
                    }
                    // Nút Trang cuối
                    if ($page < $so_trang) {
                        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $so_trang . '">Trang cuối</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
        </div>
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Mọi thông tin bạn cần về cửa hàng đều ở bên dưới</h3>
                        <p>Hãy liên lạc bất cứ khi nào bạn cần</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">Gọi đến cửa hàng</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Cta Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Liên Hệ</h2>
                    <p>Bất cứ khi nào bạn cần thì chúng tôi luôn có mặt.</p>
                </div>

                <div class="row">

                    <div class="d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Địa Chỉ:</h4>
                                <p>273 An D. Vương, Phường 3, Quận 5, Thành phố Hồ Chí Minh 700000, Việt Nam</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Số Điện Thoại:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1904.0420970155242!2d106.68168995824612!3d10.759936834220937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b7c3ed289%3A0xa06651894598e488!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1667443151910!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

</main>
<!-- End #main -->