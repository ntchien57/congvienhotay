<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="./views/assets/css/home.css">
    <link rel="stylesheet" href="./views/assets/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./views/assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <script src="./views/assets/js/jquery-3.5.1.min.js"></script>
    <script src="./views/assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="./views/assets/js/home.js"></script>
</head>
<body>
<div class="wrapper">

    <?php include_once "./views/user/header.php"?>
    <div class="content">
        <div class="phone-hot">
            <div class="title">
                <h3>Kết quả tìm kiếm với từ khóa <?php echo '<b>"'.$_POST["search"].'"</b>' ?></h3>
            </div>
            <div class="phone-content">
                <?php
                if ($trochoi->num_rows > 0) { foreach ($trochoi as $item) {
    
                    ?>
                    <div class="phone-item">
                        <a href="?role=user&action=chitiet&id=<?php echo $item["id"] ?>">
                            <p class="phone-name"><?php echo $item["ten"] ?></p>
                            <p class="phone-price"><?php echo $item["gia"] ?></p>
                            <div class="phone-desc">
                                <div class="phone-km">
                                    <?php
                                    $dacdiem = explode(";", $item["dacdiemnoibat"]);
                                    foreach ($dacdiem as $dd) {
                                        ?>
                                        <div class="km-item">
                                            <i class="fa fa-check-circle"></i>
                                            <span><?php echo $dd?></span>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <div class="list-km">
                                        <p class="list-km-title">Khuyến mại</p>
                                        <div>
                                            <div class="list-km-item">
                                                <img src="./views/assets/image/0d.png" alt="">
                                                <p>Trả góp trả trước chỉ 469.000đ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone-img">
                                    <img src="<?php echo $item["anhminhhoa"] ?>" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } } else { ?>
                    <p>Không tìm thấy kết quả nào</p>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div>
            <div class="f-item">
                <ul>
                    <li><a href="#">Giới thiệu về công ty</a></li>
                    <li><a href="#">Câu hỏi thường gặp mua hàng</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Quy chế hoạt động</a></li>
                    <li><a href="#">Kiểm tra hóa đơn điện tử</a></li>
                    <li><a href="#">Tra cứu thông tin bảo hành</a></li>
                </ul>
            </div>
            <div class="f-item">
                <ul>
                    <li><a href="#">Tin tuyển dụng</a></li>
                    <li><a href="#">Tin khuyến mãi</a></li>
                    <li><a href="#">Hướng dẫn mua online</a></li>
                    <li><a href="#">Hướng dẫn mua trả góp</a></li>
                    <li><a href="#">Chính sách trả góp</a></li>
                    <li><a href="#">Tra cứu thông tin bảo hành</a></li>
                </ul>
            </div>
            <div class="f-item">
                <ul>
                    <li><a href="#">Hệ thống cửa hàng</a></li>
                    <li><a href="#">Hệ thống bảo hành</a></li>
                    <li><a href="#">Kiểm tra hàng Apple chính hãng</a></li>
                    <li><a href="#">Giới thiệu máy đổi trả</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

    </div>

</div>
</body>
</html>