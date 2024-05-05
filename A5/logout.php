<?php

session_start();

// hủy phiên làm việc hiện tại
if(isset($_SESSION['username'])) unset($_SESSION['username']);

// chuyển hướng về URL được lưu trong session
header("Location: ./index.php");
exit;

?>

