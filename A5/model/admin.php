<?php
function checkadmin($username, $password)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_adminpro WHERE usernameadmin='$username' AND passwordadmin='$password'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    if(count($kq) > 0) return $kq[0]['role'];
    else return 0;
}
function get_admin_by_username($username) {
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_adminpro WHERE usernameadmin = ?");
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result : false;
}



