<?php
// Kết nối đến cơ sở dữ liệu MySQL sử dụng PDO
$db_host = 'localhost';
$db_name = 'product_db';
$db_user = 'root';
$db_pass = "";
$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);

$user_id = $_POST['user_id'];
// Cập nhật trạng thái của người dùng sang "đã khóa"
$stmt = $db->prepare("UPDATE tbl_admin SET status = 0 WHERE id = ?");
$stmt->execute([$user_id]);
// Trả về tin nhắn thành công cho phía máy khách
echo "Khóa tài khoản thành công!";
