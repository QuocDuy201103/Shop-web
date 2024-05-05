<?php
function checkuser($username, $password)
{
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    if (count($kq) > 0) return true;
    else return false;
}
// function getUserInfo($username, $password)
// {
//     $conn = connect_db();
//     $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq =  $stmt->fetchAll();
//     return $kq;
    
// }
function getUserInfo($username, $password) {
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username=:username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetchAll();

    if(count($user) > 0) {
        // Lấy mật khẩu đã được mã hóa từ cơ sở dữ liệu
        $hashed_password = $user[0]['password'];

        // Kiểm tra mật khẩu có đúng không
        if(password_verify($password, $hashed_password)) {
            return $user;
            
        }
    }
    // return null;
}


// function getUserInfo($username)
// {
//     $conn = connect_db();
//     $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username = ?");
//     $stmt->execute([$username]);
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $user;
    
// }

function registerUser($fullname, $address, $phonenumber, $username, $email, $hashed_password)
{
    $conn = connect_db();
    $stmt = $conn->prepare("INSERT INTO tbl_admin (address, email, username, password, fullname, phonenumber) VALUES (:address, :email, :username, :password, :fullname, :phonenumber)");
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':fullname', $fullname);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $result = $stmt->execute();
    return $result;
}
// function getinfo(){
//     $conn = connect_db();
//     $sql = "SELECT * FROM tbl_admin WHERE 1";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }
function get_all_user_info()
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_admin";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function get_user_info($username)
{
    $conn = connect_db();
    $sql = "SELECT * FROM tbl_admin WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_user_id($username)
{
    $conn = connect_db();
    $sql = "SELECT id FROM tbl_admin WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['id'];
}
function getoneuser($id){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE id='".$id."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq =  $stmt->fetchAll();
    return $kq;
}
function updateUserInfo($id, $address, $email, $username, $password, $fullname, $phonenumber)
{
    $conn = connect_db();
    $sql = "UPDATE tbl_admin SET address='$address', email='$email',username='$username',password='$password', fullname='$fullname', phonenumber='$phonenumber' WHERE id='$id'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}


//kiem tra tai khoan co bi khoa hay khong
function is_locked($id)
{
    $conn = connect_db();
    $sql = "SELECT status FROM tbl_admin WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result['status'] == 0) {
        return true;
    } else {
        return false;
    }
}
function checkExistingUsername($username) {
    // kết nối cơ sở dữ liệu sử dụng PDO
    $conn = connect_db();

    //truy vấn để kiểm tra sự tồn tại của tên đăng nhập
    $stmt = $conn->prepare("SELECT * FROM tbl_admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    // nếu query trả về ít nhất 1 hàng thì username đã tồn tại
    if ($stmt->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
  
// function can_login($username, $password)
// {
//     $conn = connect_db();
//     $sql = "SELECT * FROM tbl_admin WHERE username = :username AND password = :password";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':username', $username);
//     $stmt->bindParam(':password', $password);
//     $stmt->execute();
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
//     if ($result['status'] == 0) {
//         return false;
//     } else {
//         return true;
//     }
// }
