<?php
session_start();
ob_start();
if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
    if(isset($_GET['id'])){
        array_splice($_SESSION['cart'], $_GET['id'],1);
    } else {
        unset($_SESSION['cart']);
    }
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        header('location: pay_cart.php');
    } else {
        // echo "Giỏ hàng rỗng";
        // hoặc chuyển hướng tới trang "Giỏ hàng rỗng"
        header('location: empty_cart.php');
    }
} else {
    // echo "Giỏ hàng rỗng";
    // hoặc chuyển hướng tới trang "Giỏ hàng rỗng"
    header('location: empty_cart.php');
}


?>