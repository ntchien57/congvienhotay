<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Công viên nước hồ tây</title>
    <link rel="stylesheet" href="./views/assets/css/home.css">
    <link rel="stylesheet" href="./views/assets/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./views/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <script src="./views/assets/js/jquery-3.5.1.min.js"></script>
    <script src="./views/assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="./views/assets/js/home.js"></script>
    <style>
       .wrapper {
            font-family: Arial;
            overflow: hidden;

        }

        .login {
            width: 500px;
            border: #ddd solid 1px;
            top: 0;
            left: 0;
            right: 0;
            margin: auto;
            margin-top: 50px;
            border-radius: 5px;
        }

        .login-title {
            background: #118bdd;
            color: #fff;
            text-align: center;
            height: 40px;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0;
        }

        label {
            color: red;
        }

        .login form {
            padding: 10px;
            font-size: 14px;
        }

        .login-item {
            margin-bottom: 15px;
        }

        .login-item input {
            width: 95%;
            margin-top: 5px;
            border: #ddd solid 1px;
            border-radius: 5px;
            height: 35px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .login-item input:focus {
            border: #03A9F4 solid 1px;
        }

        .login form button {
            background: #118bdd;
            color: #fff;
            border: #118bdd solid 1px;
            height: 35px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
            padding: 10px 40px;

        }

        .login-btn {
            display: flex;
            justify-content: center;
            padding: 20px 50px;
        }

        .box-login {
            color: #333 !important;
        }
    </style>
</head>

<body>
    <?php include_once "./views/user/header.php" ?>
    <div class="wrapper box-login" style="padding:10% 0">
        <div class="login">
            <p class="login-title">Đăng nhập</p>
            <form action="" method="post">
                <div class="login-item">
                    <label for="">Tài khoản</label>
                    <input type="text" name="username" required>
                </div>
                <div class="login-item">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="password" required>
                </div>
                <span>Bạn chưa có tài khoản? <a href="?role=user&action=dangky">Đăng kí ngay</a></span>
                <div class="login-item login-btn">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once "./views/user/footer.php" ?>
    <?php if (isset($_SESSION["thongbao"])) { ?>
        <script>
            alert("<?php echo $_SESSION["thongbao"]; ?>")
        </script>
    <?php unset($_SESSION["thongbao"]);
    } ?>
</body>

</html>