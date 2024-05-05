<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
    if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
        $id = $_POST['id'];
        $tensp = $_POST['tensp'];
        $img = $_POST['img'];
        $gia = $_POST['gia'];
        $sl = 1;
        $i = 0;
        $found = false;
        // tìm và so sánh giỏ hàng
        if(isset($_SESSION['cart']) && (count($_SESSION['cart']) > 0)){
            foreach ($_SESSION['cart'] as $sp) {
                if($sp[0] == $id){
                    // cập nhật số lượng sản phẩm
                    $sl += $sp[4];
                    $found = true;
                    // cập nhật số lượng mới vào giỏ hàng
                    $_SESSION['cart'][$i][4] = $sl;
                    break;
                }
                $i++;
            }
        }

        // khi số lượng ban đầu không thay đổi thì thêm sản phẩm mới vào giỏ hàng
        if(!$found){
            $sp = array($id, $tensp, $img, $gia, $sl);
            array_push($_SESSION['cart'], $sp);
        }

        // chuyển trang
        header('location: ./pay_cart.php');
    }
?>
