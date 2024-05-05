<style>
    .section-title h2 {
        margin-top: 50px;
    }
</style>
<?php if (!empty($sanpham)) : ?>
    <section id="portfolio" class="portfolio">
        <a class="home-return-link" href="index.php">
            <i class="home-return-icon-pro bi bi-house-door"></i>
        </a>
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>
                    <?php if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                        echo 'Từ khóa tìm kiếm: ';
                        echo $_POST['keyword'];
                    } else {
                        echo "Vui lòng nhập từ khóa tìm kiếm";
                    }  ?>
                </h2>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                if (isset($_POST['keyword'])) {
                    
                    showProduct($sanpham);
                    
                }
                ?>


            </div>
        </div>
    </section>
<?php else : ?>
    <h3 style="margin:100px auto 50px auto;text-align:center;">Không tìm thấy sản phẩm nào phù hợp với từ khóa "<?php echo $_POST['keyword'] ?>"</h3>
<?php endif; ?>