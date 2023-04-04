<?php
session_start();
$messenger = '';
require_once 'usersql.php';
if (!empty($_SESSION['messenger'])) {
    $messenger = $_SESSION['messenger'];
    unset($_SESSION['messenger']);
}
require_once 'usersql.php';
if (!empty($_POST['register'])) {
    $newusername = $_POST['newusername'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];
    $checkExistUser = getEistUser($newusername);
    if ($checkExistUser) {
        $_SESSION['messenger'] = 'tên đăng nhập đã tồn tại';
        die;
    } else {
        if ($newpassword1 !== $newpassword2) {
            $_SESSION['messenger'] = 'Mật khẩu không trùng nhau';
            die;
        } else {
            adduser($newusername, $newpassword1);
        }
    }
}



?>