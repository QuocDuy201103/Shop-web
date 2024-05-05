<?php
function themdanhmuc($tendanhmuc)
{
    $conn = connect_db();
    $sql = "INSERT INTO tbl_danhmuc (tendanhmuc) VALUES ('$tendanhmuc')";
    // use exec() because no results are returned
    $conn->exec($sql);
}

function updatedanhmuc($id, $tendanhmuc)
{
    $conn = connect_db();
    $sql = "UPDATE tbl_danhmuc SET tendanhmuc='$tendanhmuc' WHERE id='$id'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function getonedanhmuc($id)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id='" . $id . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    return $kq;
}
function getdanhmucId()
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT id FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
    return $result;
}
// function deldanhmuc($id){
//     $conn = connect_db();
//     $sql = "DELETE FROM tbl_danhmuc WHERE id='".$id."'";
//     $conn->exec($sql);
// }
function deldanhmuc($id)
{
    $conn = connect_db();
    // kiểm tra xem danh mục có sản phẩm hay không
    $sql_count = "SELECT COUNT(*) as count FROM tbl_sanpham WHERE iddanhmuc='" . $id . "'";
    $stmt_count = $conn->prepare($sql_count);
    $stmt_count->execute();
    $result = $stmt_count->fetch(PDO::FETCH_ASSOC);
    $count = $result['count'];
    if ($count == 0) {
        // nếu không có sản phẩm thì xóa danh mục
        $sql = "DELETE FROM tbl_danhmuc WHERE id='" . $id . "'";
        $conn->exec($sql);
        echo "<script>alert('Xóa danh mục thành công.');</script>";
    } else {
        echo "<script>alert('Không thể xóa danh mục vì còn sản phẩm trong danh mục này.');</script>";
    }
}

function getall_danhmuc()
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();

    return $kq;
}
