<?php
session_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
ob_start();
include "A5/model/connect_db.php";
include "A5/model/danhmuc.php";
include "A5/model/sanpham.php";
include "A5/model/donhang.php";
$dsdm =  getall_danhmuc();
$sanpham = getall_sanpham();
$so_san_pham = count($sanpham);
$so_trang = ceil($so_san_pham / 3);
include "A5/model/user_admin.php";
include "A5/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
        case 'product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            }
            $dssp = getall_sanpham($id, "");
            include "A5/product/Product.php";
            break;


        case 'detailProduct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $detailPro = showdetailProduct($_GET['id']);
            }
            include "A5/product/detailProduct.php";
            break;
        case 'search':
            if (isset($_POST['search'])) {
                $keyword = $_POST['keyword'];
                $_SESSION['key'] = $keyword;
                $sanpham = getall_sanpham(0, $keyword);
            }
            include "A5/search.php";
            break;

        case 'advancesearch':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            }
            $tdm = getall_sanpham($id, "");
            include "A5/advancesearch.php";
            break;

        case 'register':
            include "A5/register.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $address = $_POST['address'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $fullname = $_POST['fullname'];
                $password_confirmation = $_POST['rp-password'];
                $phonenumber = $_POST['phonenumber'];

                if (checkExistingUsername($username)) {
                    echo '<script>alert("Tài khoản đã được sử dụng. Vui lòng chọn tài khoản khác.")</script>';
                } elseif ($password != $password_confirmation) {
                    echo '<script>alert("Mật khẩu không khớp vui lòng nhập lại.")</script>';
                } else {
                    $result = registerUser($fullname, $address, $phonenumber, $username, $email, $hashed_password);
                    if ($result) {
                        echo '<script>alert("Đănh ký thành công.")</script>';
                        include "A5/login.php";
                        exit;
                    } else {
                        echo '<script>alert("Đăng ký thất bại")</script>';
                    }
                }
            }
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $kq = getUserInfo($username, $password);
                // echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.")</script>';
                if (!$kq) {
                    echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng.")</script>';
                } elseif (is_locked($kq[0]['id'])) {
                    echo '<script>alert("Tài khoản của bạn đã bị khóa. Vui lòng liên hệ với quản trị viên để biết thêm chi tiết.")</script>';
                    include "A5/login.php";
                } else {
                    $_SESSION['id'] = $kq[0]['id'];
                    $_SESSION['username'] = $kq[0]['username'];
                    header('location: index.php');
                    break;
                }
            }
        case 'dangnhap':
            include "A5/login.php";
            break;

        case 'logout':
            include "A5/logout.php";
            break;

        case 'addcart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart']) && isset($_SESSION['username'])) {
                if (is_locked($_SESSION['id'])) {
                    header('location: index.php?act=logout');
                } else {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['img'];
                    $gia = $_POST['gia'];
                    if (isset($_POST['sl']) && ($_POST['sl'] > 0)) {
                        $sl = $_POST['sl'];
                    } else {
                        $sl = 1;
                    }
                    $fg = 0;
                    //kiem tra san pham co ton tai trong gio hang hay khong
                    //neu co chi cap nhat lai so luong
                    $i = 0;
                    foreach ($_SESSION['giohang'] as $item) {
                        if ($item[1] == $tensp) {
                            $slnew = $sl + $item[4];
                            $_SESSION['giohang'][$i][4] = $slnew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }
                    //khoi tao mang con trc khi dua vao gio hang
                    if ($fg == 0) {
                        $item = array($id, $tensp, $img, $gia, $sl);
                        $_SESSION['giohang'][] = ($item);
                    }
                    header('location: index.php?act=viewcart');
                }
            } else {
                echo '<script>alert("Vui lòng đăng nhập để mua hàng")</script>';
                include "A5/login.php";
            }
            break;

        case 'viewcart':
            include "A5/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['i']) && ($_GET['i'] >= 0)) {
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    if ($_GET['i'] == 0) {
                        array_shift($_SESSION['giohang']);
                    } else {
                        array_splice($_SESSION['giohang'], $_GET['i'], 1);
                    }
                }
            }
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                header('location: index.php?act=viewcart');
            } else {
                header('location: index.php?act=viewcart');
            }
            break;
        case 'thanhtoan':
            if ((isset($_POST['dathang'])) && ($_POST['dathang'])) {
                //lay du lieu
                $tongdonhang = $_POST['tongdonhang'];
                //    $gia = $_POST['gia'];
                //    $soluong = $_POST['soluong'];
                $username = $_SESSION['username'];
                $iduser = get_user_id($username);
                $fullname = $_POST['fullname'];
                if (isset($_POST['diachicu'])) {
                    $address = $_POST['diachicu'];
                } else {
                    $address = $_POST['address'];
                }
                $tell = $_POST['tell'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $madonhang = "KDN" . rand(0, 99999);
                //tao don hang
                //tra ve 1 id don hang

                $iddh = taodonhang($madonhang, $tongdonhang, $pttt, $iduser, $fullname, $address, $email, $tell);
                $_SESSION['iddh'] = $iddh;
                if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                    // $item = array($id, $tensp, $img, $gia, $sl);
                    foreach ($_SESSION['giohang'] as $item) {
                        $gia =  floatval(str_replace(',', '', $item[3]));
                        addtocart($iddh, $item[0], $item[1], $item[2], $gia, $item[4]);
                    }
                    unset($_SESSION['giohang']);
                }
                include "A5/payorder.php";
            }
            break;
        case 'donhangkhach':
            $username = $_SESSION['username'];
            $iduser = get_user_id($username);
            $orders = getAllOrdersId($iduser);
            // $cart = getAllCart();
            include "A5/donhangkhach.php";
            break;
        case 'canceled':
            $iddonhang = $_GET['id'];
            if (cancelOrder($iddonhang)) {
                echo '<script>alert("Hủy đơn hàng thành công")</script>';
            }
            $username = $_SESSION['username'];
            $iduser = get_user_id($username);
            $orders = getAllOrdersId($iduser);
            include "A5/donhangkhach.php";
            break;
        case 'chitietdonhang':
            $idorder = $_GET['id'];
            $orderdetail = getshowcart($idorder);
            include "A5/chitietdonhang.php";
            break;
        case 'userinfo':
            if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                include "A5/userinfo.php";
            }
            break;
        case 'updateInfoUserForm':
            if ((isset($_POST['update-info'])) && ($_POST['update-info'])) {
                $iduser = $_SESSION['id'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $fullname = $_POST['fullname'];
                $phonenumber = $_POST['phonenumber'];

                updateUserInfo($iduser, $address, $email, $username, $hashed_password, $fullname, $phonenumber);
                include "A5/userinfo.php";
            }
            break;

        case 'checkout':
            include "A5/checkout.php";
            break;
        default:
            include "A5/content.php";
            break;
    }
} else {
    include "A5/content.php";
}

include "A5/footer.php";
