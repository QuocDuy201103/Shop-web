<?php
$db_host = 'localhost';
$db_name = 'product_db';
$db_user = 'root';
$db_pass = "";
$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
// Lấy ID của người dùng cần mở khóa từ phương thức POST
$user_id = $_POST['user_id'];
// Cập nhật trạng thái của người dùng sang "đang hoạt động"
$stmt = $db->prepare("UPDATE tbl_admin SET status = 1 WHERE id = ?");
$stmt->execute([$user_id]);
// Trả về tin nhắn thành công cho phía máy khách
echo "Mở tài khoản thành công!";
?>

