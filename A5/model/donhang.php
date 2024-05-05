<?php
function confirmOrder($order_id) {
    // Thực hiện kết nối đến cơ sở dữ liệu
    $conn = connect_db();
    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare("UPDATE tbl_order SET status = 'confirmed' WHERE id = :order_id");
    $stmt->bindParam(':order_id', $order_id);
    // Thực thi câu lệnh SQL
    $stmt->execute();
}
function cancelOrder($order_id) {
    // Thực hiện kết nối đến cơ sở dữ liệu
    $conn = connect_db();
    // Chuẩn bị câu lệnh SQL
    $stmt = $conn->prepare("UPDATE tbl_order SET status = 'canceled' WHERE id = :order_id");
    $stmt->bindParam(':order_id', $order_id);
    // Thực thi câu lệnh SQL
    $stmt->execute();
}
function taodonhang($madonhang, $tongdonhang, $pttt, $iduser, $fullname, $address, $email, $tell)
{
    $conn = connect_db();
    $sql = "INSERT INTO tbl_order (madonhang, tongdonhang, phuongthucthanhtoan,iduser, name, address, email, tell) VALUES ('$madonhang', '$tongdonhang', '$pttt','$iduser', '$fullname','$address','$email','$tell')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    return $last_id;
}
function getAllOrdersId($userId)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE iduser = :userId");
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getAllOrders()
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_order");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getOrderId()
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT id FROM tbl_order");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
    return $result;
}

function getAllCart()
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_cart");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addtocart($iddh, $idsp, $tensp, $img, $dongia, $soluong)
{
    $conn = connect_db();
    $sql = "INSERT INTO tbl_cart (iddh, idsp, tensp, img, dongia, soluong) VALUES ('$iddh', '$idsp', '$tensp', '$img','$dongia','$soluong')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getshowcart($orderId)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_cart WHERE iddh = :orderId");
    $stmt->bindParam(":orderId", $orderId);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getorderinfo($iddh)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id='" . $iddh . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    return $kq;
}
