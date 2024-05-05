<noscript>
    <style>
        body {
            opacity: 1 !important;
        }
    </style>
</noscript>

<?php
session_start();
ob_start();
if ((isset($_SESSION['role'])) && ($_SESSION['role'] == 1)) {
    include "../model/connect_db.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/user_admin.php";
    include "../model/donhang.php";
    // connect_db();
    include "view/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'donhang':
                include "view/donhang.php";
                break;
            case 'danhmuc':
                $kq = getall_danhmuc();
                include "view/danhmuc.php";
                break;
            case 'themdanhmuc':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tendanhmuc = $_POST['tendanhmuc'];
                    themdanhmuc($tendanhmuc);
                }
                $kq = getall_danhmuc();
                include "view/danhmuc.php";
                break;
            case 'deldanhmuc':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deldanhmuc($id);
                }
                $kq = getall_danhmuc();
                include "view/danhmuc.php";
                break;
            case 'delsanpham':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $id = $_GET['id'];
                    delsanpham($id);
                }
                $kq = getall_sanpham();
                if (count($kq) == 0) {
                    include "view/sanpham.php";
                } else {
                    include "view/sanpham.php";
                }
                break;
            case 'updatedanhmucform':
                //lấy thông tin 1 record đúng id truyền vào
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = getonedanhmuc($id);
                    //cần danh sách danh mục
                    $kq = getall_danhmuc();
                    include "view/updatedanhmucform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $tendanhmuc = $_POST['tendanhmuc'];
                    updatedanhmuc($id, $tendanhmuc);
                    //cần danh sách danh mục
                    $kq = getall_danhmuc();
                    include "view/danhmuc.php";
                }

                break;
            case 'updatesanpham':
                //load dsdm
                $dsdm = getall_danhmuc();
                //sp chi tiet theo getid
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $spct = getonesanpham($_GET['id']);
                }
                //load dssp
                $kq = getall_sanpham();
                include "view/updatesanpham.php";
                break;
            case 'sanpham_update':
                //load dsdm
                $dsdm = getall_danhmuc();
                //cap nhat san pham
                if (isset($_POST['updatesanpham']) && ($_POST['updatesanpham'])) {
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensanpham = $_POST['tensanpham'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];
                    $xuatxu = $_POST['xuatxu'];
                    $detail = $_POST['detail'];
                    $dungtich = $_POST['dungtich'];
                    if ($_FILES["img"]["name"] != "") {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        // Allow certain file formats
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {
                            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                                // insert_Product($iddanhmuc, $tensanpham, $gia, $img);
                            } else {
                                echo "<script>alert('Có lỗi xảy ra khi upload ảnh!');</script>";
                            }
                        } else {
                            echo "<script>alert('Yêu cầu nhập đúng file ảnh!');</script>";
                        }
                    } else {
                        $img = "";
                    }
                    updatesanpham($id, $tensanpham, $gia, $img, $xuatxu, $detail, $dungtich, $iddanhmuc);
                }
                //load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'sanpham':
                //load dsdm
                $dsdm = getall_danhmuc();
                //load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;
            case 'sanpham_add':
                if ((isset($_POST['themsanpham'])) && ($_POST['themsanpham'])) {
                    $iddanhmuc = $_POST['iddanhmuc'];
                    $tensanpham = $_POST['tensanpham'];
                    $gia = $_POST['gia'];
                    $xuatxu = $_POST['xuatxu'];
                    $detail = $_POST['detail'];
                    $dungtich = $_POST['dungtich'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            insert_Product($iddanhmuc, $tensanpham, $gia, $img, $xuatxu, $detail, $dungtich);
                        } else {
                            echo "<script>alert('Có lỗi xảy ra khi upload ảnh!');</script>";
                        }
                    } else {
                        echo "<script>alert('Yêu cầu nhập đúng file ảnh!');</script>";
                    }
                }
                //load dsdm
                $dsdm = getall_danhmuc();
                //load dssp
                $kq = getall_sanpham();
                include "view/sanpham.php";
                break;

            case 'ansanpham':
                // Kiểm tra nếu người dùng click vào nút "Ẩn/Hiện sản phẩm"
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];

                    // Lấy thông tin sản phẩm từ cơ sở dữ liệu
                    $conn = connect_db();
                    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id = :id");
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();
                    $product = $stmt->fetch(PDO::FETCH_ASSOC);

                    // Thay đổi trạng thái sản phẩm
                    $new_status = $product['status'] == 1 ? 0 : 1; // Nếu trạng thái ban đầu là 1 thì sẽ chuyển thành 0, ngược lại sẽ chuyển thành 1
                    $stmt = $conn->prepare("UPDATE tbl_sanpham SET status = :status WHERE id = :id");
                    $stmt->bindParam(':id', $id);
                    $stmt->bindParam(':status', $new_status);
                    $stmt->execute();

                    // Chuyển hướng người dùng về trang quản lý sản phẩm
                    header('Location: index.php?act=sanpham');
                    exit();
                }
                include "view/sanpham.php";
                break;
            case 'nguoidung':
                $user_info_list = get_all_user_info();
                include "view/nguoidung.php";
                break;
            case 'themnguoidung':
                if (isset($_POST['adduser']) && ($_POST['adduser'])) {
                    $fullname = $_POST['fullname'];
                    $address = $_POST['address'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $phonenumber = $_POST['phonenumber'];
                    $email = $_POST['email'];

                    $newuser = registerUser($fullname, $address, $phonenumber, $username, $email, $hashed_password);
                    if ($newuser) {
                        echo "<script>alert('Thêm thành công');</script>";
                    } else {
                        echo "<script>alert('Thêm thất bại');</script>";
                    }
                }
                $user_info_list = get_all_user_info();
                include "view/nguoidung.php";
                break;
            case 'updateuser':
                //lấy thông tin 1 record đúng id truyền vào
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $oneuser = getoneuser($id);
                    //cần danh sách user
                    $user_info_list = get_all_user_info();
                    include "view/updateuser.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $fullname = $_POST['fullname'];
                    $address = $_POST['address'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $phonenumber = $_POST['phonenumber'];
                    $email = $_POST['email'];
                    updateUserInfo($id, $address, $email, $username, $password, $fullname, $phonenumber);
                    //cần danh sách user
                    $user_info_list = get_all_user_info();
                    include "view/nguoidung.php";
                }

                break;
            case 'pageorder':
                $orders = getAllOrders();
                include "view/pageorder.php";
                break;
            case 'detailorder':
                $iddonhang = $_GET['id'];
                $orderdetail = getshowcart($iddonhang);
                include "view/detailorder.php";
                break;
            case 'confirmed':
                $iddonhang = $_GET['id'];
                if (confirmOrder($iddonhang)) {
                    echo "<script>alert('Xác nhận đơn hàng thành công.');</script>";
                }
                $orders = getAllOrders();
                include "view/pageorder.php";
                break;

            case 'thoat':
                if (isset($_SESSION['role'])) unset($_SESSION['role']);
                header('location: login_admin.php');
                exit;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }
} else {
    header('location: login_admin.php');
}
?>