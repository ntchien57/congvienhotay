<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>     
        .wrapper {
            height: 100vh;
            font-family: Arial;
            overflow: hidden;
        }

        .login {
            width: 500px;
            border: #ddd solid 1px;
            position: absolute;
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
            margin-top:0;
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
            padding: 10px 40px;
        }

        .box-login {
            color: #333 !important;
        }
    </style>
    <title>Đăng nhập</title>
</head>

<body>
    <div class="wrapper box-login">
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
                <div class="login-item login-btn">
                    <button>Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>