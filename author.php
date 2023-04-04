
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://kit.fontawesome.com/e003b7057b.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/main.css">
    <title>Author Form</title>
</head>
<body>
    
<?php
    session_start();
    $messenger = '';
    ?> 
<html>
    <!-- modal layout -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- authen form -->
            <div class="auth-form">
                <div class="auth-form-container">

                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>
                    <div class="auth-form__form">
                        <form action="login.php" method="post">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" name="username" placeholder="email">

                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" name="password" placeholder="password">

                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" name="password1" placeholder="nhập lại password">

                            </div>
                            <div class="auth-form__aside">
                                <p class="auth-form__policy-text">Bằng việc đăng ký, bãn đã đồng ý với chúng tôi về
                                    <a href="" class="auth-form__policy-link">Điều khoản về tài khoản</a> &
                                    <a href="" class="auth-form__policy-link">Chính sách bảo mật</a>
                                </p>
                            </div>
                            <div class="auth-form__control">
                                <button class="btn">Trở lại</button>
                                <button type="submit" name="register" class="btn btn-primary" >Đăng ký</button>

                            </div>
                    </div>
                    <div class="auth-form__social">
                        <a href="" class="btn btn--withicon">
                            <i class="fa-brands fa-square-facebook"></i>
                            kết nối với Facebook
                        </a>
                        <a href="" class="btn btn--withicon">
                            <i class="fa-brands fa-google"></i>
                            kết nối với Google
                        </a>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</html>
<?php

?>
</body>
</html>