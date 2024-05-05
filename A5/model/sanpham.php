<?php
function updatesanpham($id, $tensanpham, $gia, $img, $xuatxu, $detail, $dungtich, $iddanhmuc)
{
    $conn = connect_db();
    if ($img == "") {
        $sql = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', gia='$gia',xuatxu='$xuatxu',detail='$detail',dungtich='$dungtich', iddanhmuc='$iddanhmuc' WHERE id='$id'";
    } else {
        $sql = "UPDATE tbl_sanpham SET tensanpham='$tensanpham', gia='$gia',xuatxu='$xuatxu',detail='$detail', iddanhmuc='$iddanhmuc', img='$img' WHERE id='$id'";
    }
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}

function getonesanpham($id)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id='" . $id . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    return $kq;
}

function delsanpham($id)
{
    $conn = connect_db();
    $sql = "DELETE FROM tbl_sanpham WHERE id='" . $id . "'";
    $conn->exec($sql);
}

function insert_Product($iddanhmuc, $tensanpham, $gia, $img, $xuatxu, $detail, $dungtich)
{
    $conn = connect_db();
    $sql = "INSERT INTO tbl_sanpham (iddanhmuc, tensanpham, gia, img, xuatxu, detail, dungtich) VALUES ('$iddanhmuc', '$tensanpham', '$gia', '$img','$xuatxu','$detail','$dungtich')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
// function getall_sanpham($iddanhmuc=0,$kyw=""){
//     $conn = connect_db();
//     $sql = "SELECT * FROM tbl_sanpham WHERE 1";
//     if($iddanhmuc>0) $sql.=" AND iddanhmuc=".$iddanhmuc;
//     if($kyw>0) $sql.=" AND tensanpham like '%".$iddanhmuc."%'";
//     $sql.= " order by id ASC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq =  $stmt->fetchAll();
//     return $kq;
// }
function getall_sanpham($iddanhmuc = 0, $kyw = "")
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddanhmuc > 0) {
        $sql .= " AND iddanhmuc = " . $iddanhmuc;
    }
    if ($kyw != "") {
        $sql .= " AND tensanpham LIKE '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function searchSanPham($keyword, $price_min, $price_max, $danhMuc) {
    // Tạo câu truy vấn động
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1 = 1";
    if (!empty($keyword)) {
        $sql .= " AND tensanpham LIKE '%$keyword%'";
    }
    if (!empty($price_min) && !empty($price_max)) {
        $sql .= " AND gia BETWEEN '$price_min' AND '$price_max'";
    } else if (!empty($price_min)) {
        $sql .= " AND gia >= '$price_min'";
    } else if (!empty($price_max)) {
        $sql .= " AND gia <= '$price_max'";
    }

    if (!empty($danhMuc)) {
        $sql .= " AND iddanhmuc = '$danhMuc'";
    }else{
        $sql .= "";
    }
    // Thực hiện truy vấn
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $dsSanPham = $stmt->fetchAll();
    // Trả về kết quả tìm kiếm
    return $dsSanPham;
}

function advanceSearchProduct($iddanhmuc = 0, $kyw = "", $gia = 0)
{

    $conn = connect_db();
    $min_price = 100;
    $max_price = 200;
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddanhmuc > 0) {
        $sql .= " AND iddanhmuc = " . $iddanhmuc;
    }
    if ($kyw != "") {
        $sql .= " AND tensanpham LIKE '%" . $kyw . "%'";
    }
    if ($gia > 0) {
        $sql .= " AND gia BETWEEN :min_price AND :max_price";
    }
    $sql .= " ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_category_id($iddanhmuc = 0)
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddanhmuc > 0) {
        $sql .= " AND iddanhmuc = " . $iddanhmuc;
    }
    $sql .= " ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_product_name($tensanpham = "")
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if (!empty($tensanpham)) {
        $sql .= " AND tensanpham LIKE '%" . $tensanpham . "%'";
    }
    $sql .= " ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_sanpham_by_gia($gia_min = 0, $gia_max = 0)
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($gia_min > 0 && $gia_max > 0) {
        $sql .= " AND gia BETWEEN " . $gia_min . " AND " . $gia_max;
    } elseif ($gia_min > 0) {
        $sql .= " AND gia >= " . $gia_min;
    } elseif ($gia_max > 0) {
        $sql .= " AND gia <= " . $gia_max;
    }
    $sql .= " ORDER BY id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}


function showProduct($ds)
{
    foreach ($ds as $sp) {
        if ($sp['status'] == 1) { // nếu trạng thái là ẩn thì không hiển thị sản phẩm
            echo '
                <div class="col-lg-4 col-md-6 portfolio-item filter-chanel">
                        <form action="index.php?act=addcart" method="post">
                        <a>
                            <div class="portfolio-img"><img src="A5/upload/' . $sp['img'] . '" class="img-fluid" alt=""></div>
                        </a>
                            <div class="portfolio-info">
                            <h4>' . $sp['tensanpham'] . '</h4>
                            <span class="woocommerce-Price-amount amount">
                            <p style="color: black;">
                            <span class="woocommerce-Price-currencySymbol">
                            Hết hàng
                            </span> 
                            </p>
                            </span class="control">                  
                            <input type="hidden" name="id" value="' . $sp['id'] . '">
                            <input type="hidden" name="img" value="' . $sp['img'] . '">
                            <input type="hidden" name="tensp" value="' . $sp['tensanpham'] . '">
                            </div>
                        </form>
                </div>
            ';
        } else {
            if ($sp['gia'] == 0) {
                $gia = 'Đang cập nhật';
            } else {
                if ($sp['giacu'] > 0) {
                    $gia = '<del>' . number_format($sp['giacu']) . '</del>' . number_format($sp['gia']) . '';
                } else {
                    $gia = '' . number_format($sp['gia']) . '';
                }
            }
            echo '
                <div class="col-lg-4 col-md-6 portfolio-item filter-chanel">
                        <form action="index.php?act=addcart" method="post">
                        <a href="index.php?act=detailProduct&id=' . $sp['id'] . '">
                            <div class="portfolio-img"><img src="A5/upload/' . $sp['img'] . '" class="img-fluid" alt=""></div>
                        </a>
                            <div class="portfolio-info">
                            <h4>' . $sp['tensanpham'] . '</h4>
                            <span class="woocommerce-Price-amount amount">
                            <p style="color: black;">
                            <span class="woocommerce-Price-currencySymbol">
                            ' . $gia . '₫
                            </span> 
                            </p>
                            </span class="control">                  
                            <input type="hidden" name="id" value="' . $sp['id'] . '">
                            <input type="hidden" name="img" value="' . $sp['img'] . '">
                            <input type="hidden" name="tensp" value="' . $sp['tensanpham'] . '">
                            <input type="hidden" name="gia" value="' . $gia . '">
                            <input type="submit" name="addtocart" class="shopping-cart btn btn-outline-dark" value="Thêm vào giỏ hàng">
                            </div>
                        </form>
                </div>
            ';
        }
    }
}
function showdetailProduct($id)
{
    $sql = "SELECT * FROM tbl_sanpham WHERE id=:id";
    $conn = connect_db();
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(':id' => $id));
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
