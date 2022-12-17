<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $trochoi["ten"]; ?></title>
    <link rel="stylesheet" href="./views/assets/css/home.css">
    <link rel="stylesheet" href="./views/assets/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./views/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <script src="./views/assets/js/jquery-3.5.1.min.js"></script>
    <script src="./views/assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="./views/assets/js/home.js"></script>
</head>

<body>
    <div class="wrapper" style="padding:10% 0">

        <?php include_once "./views/user/header.php" ?>
        <div class="content">
            <div class="chitiet-info">
                <div class="chitiet-tieude">
                    <?php echo $trochoi["tenTC"]; ?>
                </div>
                <div class="chitiet-mota">
                    <div class="chitiet-img">
                        <div class="ct-image">
                            <img src="<?php echo $trochoi["anhminhhoa"]; ?>" alt="">
                        </div>
                        <div class="chitiet-gia">
                            <div>
                                <div class="ct-gia">
                                    <p>Giá</p>
                                    <p style="color:red"><?php echo number_format($trochoi["gia"]); ?><sup>đ</sup></p>
                                </div>
                            </div>
                            <div class="ct-giaohang">
                                <i class="fa fa-clock-o"></i>
                                <span style="text-transform:uppercase">Đặt vé ngay chơi liền tay</span>
                            </div>
                            <div class="ct-kmdacbiet">
                                <p>Khuyến mãi đặc biệt</p>
                                <div>
                                    <ul>
                                        <li>Luôn có người bảo hộ 24/24 </li>
                                        <li>Tặng ngay kính bơi khi đi theo nhóm </li>
                                        <li>Mua vé theo nhóm giảm 10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ct-muangay">
                                <a href="?role=user&action=themgiohang&loai=muangay&id=<?php echo $trochoi["id"];  ?>"><button>ĐẶT VÉ NGAY</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="chitiet-hop">
                        <div class="dacdiem">
                            <div class="dacdiem-tieude">Mô tả</div>
                            <div class="dacdiem-nd">
                                <?php echo $trochoi["mota"] ?>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>  
        
    </div>
    <?php include_once "./views/user/footer.php" ?>
</body>

</html>