<?php
session_start();
require_once 'connsql.php';
if (!empty($_POST['username']) && !empty($_POST['password'])) {   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = connection();
    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
    } else {
        $_SESSION['messenger'] = 'Tài khoản hoặc mật khẩu không đúng';
        disconnect($conn);
    }
    } else {
    $_SESSION['messenger'] = 'Chưa nhập tài khoản hoặc mật khẩu';
     
    }
    $exuser = $_SESSION['username'];
// Trở về trang trước
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
