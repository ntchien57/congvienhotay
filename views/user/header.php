<div id="header" style="position: fixed;
            top: 0;
            z-index: 0;
            width: 100%;">
    <div class="header" style="background-color: #40a9e6;">
        <div class="logo">
            <a href="index.php"><img src="./views/assets/image/logo1.png"></a>
        </div>
        <div class="search">
            <form action="?role=user&action=timkiem" method="post">
                <input type="text" placeholder="Bạn muốn tìm gì?" name="search">
                <button> <i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="cart">

            <a href="?role=user&action=giohang" style="color: #fff;">
                <i class="fa fa-shopping-cart" style="font-size: 30px;"></i>
                <div class="cart-sl" style="display: <?php if (!isset($_SESSION["giohang"])) echo 'none';
                                                        else if (count($_SESSION["giohang"]) == 0) echo 'none'; ?>;">
                    <span><?php
                            if (isset($_SESSION["giohang"])) echo count($_SESSION["giohang"]);
                            ?></span>
                </div>
            </a>
        <?php if(isset($_SESSION["display_name"])){?>
            <span style="padding-left:20px; color:#fff"><?php echo $_SESSION["display_name"]?></span>
            <a style="padding-left:20px; color:#fff" href="?role=user&action=dangxuat"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
        <?php }else{ ?>
            <a style="padding-left:20px; color:#fff" href="?role=user&action=dangnhap"><i class="fa fa-user"></i></a>

        <?php } ?>            
        </div>
    </div>

    <div class="menu" style="background-color:blueviolet">
        <ul>
            <li><a href=""><i class="fa fa-gamepad"></i>Các trò chơi</a></li>
            <li><a href="#banggiachothuedo"><i class="fa fa-ticket"></i></i> Bảng giá cho thuê đồ</a></li>
            <li><a href="#banggiave"><i class="fa fa-ticket"></i>Bảng giá vé</a></li>

        </ul>
    </div>
</div>