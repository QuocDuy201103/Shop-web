<?php
    if(!is_array($detailPro)){
        echo 'Sản phẩm KHÔNG TỒN TẠI!!!';
    }else{
        $id=$detailPro['id'];
        $tensp = $detailPro['tensanpham'];
        $gia = $detailPro['gia'];
        $xuatxu = $detailPro['xuatxu'];
        $dungtich = $detailPro['dungtich'];
        $detail = $detailPro['detail'];
        $img = "A5/upload/".$detailPro['img'];
        if(is_file($img)) {
            $img='<img src='.$img.'>';
        } else {
            $img='';
        }
?>
<style>
.buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
}
.is-form {
    overflow:hidden;
    position:relative;
    background-color:#f9f9f9;
    height:2.2rem;
    width:1.9rem;
    padding:0;
    text-shadow:1px 1px 1px #fff;
    border:1px solid #ddd;
}
.is-form:focus,.input-text:focus {
    outline:none;
}
.is-form.minus {
    border-radius:4px 0 0 4px;
}
.is-form.plus {
    border-radius:0 4px 4px 0;
}
.input-qty {
    background-color:#fff;
    height:2.2rem;
    text-align:center;
    font-size:1rem;
    display:inline-block;
    vertical-align:top;
    margin:0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0;
}
.input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
    -webkit-appearance:none;
    margin:0;
}
</style>
<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <a class="home-return-link" href="index.php">
                <i class="home-return-icon"> Trang chủ</i>
            </a>
            <div class="container-pro">
                <h2>Sản Phẩm Đã Chọn</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">
                <form style="display: flex;" action="index.php?act=addcart" method="post">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <?=$img;?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Thông Tin Sản Phẩm</h3>

                            <ul>
                                <li><strong>Loại</strong>: <?=$tensp?></li>
                                <li><strong>Xuất xứ</strong>: <?=$xuatxu?></li>
                                <li><strong>Dung tích</strong>: <?=$dungtich?></li>
                                <li style="font-size: 18px;"><strong>Giá</strong>: <?=number_format($gia)?> ₫</li>
                            </ul>
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="sl" type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                            <input type="submit" name="addtocart" class="shopping-cart-detail btn btn-outline-dark" value="Mua hàng">

                        </div>

                        <div class="portfolio-description">
                            <h2>Nghệ Thuật Nước Hoa</h2>
                            <p><?=$detail?></p>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="img" value="<?=$detailPro['img']?>">
                    <input type="hidden" name="tensp" value="<?=$tensp?>">
                    <input type="hidden" name="gia" value="<?=$gia?>">
                </form>
                </div>

            </div>
        </section>
        <!-- End Portfolio Details Section -->

    </main>
    <!-- End #main -->
    <script>
    // Lặp qua từng input có class là "input-qty"
    document.querySelectorAll('input.input-qty').forEach(function(input) {
        
        var min = Number(input.getAttribute('min'));
        var max = Number(input.getAttribute('max'));
        var quantity = Number(input.value); // Lấy giá trị quantity hiện tại
        
        // Lấy các button "+" và "-"
        var plusButton = input.parentElement.querySelector('.plus');
        var minusButton = input.parentElement.querySelector('.minus');
        
        // Thêm sự kiện click cho button "+"
        plusButton.addEventListener('click', function() {
            if(quantity < max) { // Nếu quantity chưa đạt giá trị tối đa
                quantity++; // Tăng giá trị quantity lên 1
                input.value = quantity; // Gán giá trị quantity vào input
            }
        });
        
        // Thêm sự kiện click cho button "-"
        minusButton.addEventListener('click', function() {
            if(quantity > min) { // Nếu quantity chưa đạt giá trị tối thiểu
                quantity--; // Giảm giá trị quantity xuống 1
                input.value = quantity; // Gán giá trị quantity vào input
            }
        });
        
    });
</script>


    <?php } ?>