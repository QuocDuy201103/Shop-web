<?php

session_start();

// hủy phiên làm việc hiện tại
session_destroy();

// chuyển hướng về URL được lưu trong session
header("Location: ");
exit;

?>

