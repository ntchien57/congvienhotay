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
</head>

<body>
    <?php include_once "./views/user/header.php" ?>
    <div class="wrapper" style="padding:10% 0">
        <div class="content box-giohang">
            <?php if (!isset($_SESSION["giohang"])) { ?>
                <div class="giohangrong">
                    <i class="fa fa-shopping-cart"></i>
                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                </div>
            <?php } else  if (count($_SESSION["giohang"]) == 0) { ?>
                <div class="giohangrong">
                    <i class="fa fa-shopping-cart"></i>
                    <p>Không có sản phẩm nào trong giỏ hàng của bạn</p>
                </div>
            <?php } else { ?>
                <div class="giohang-danhsach">
                    <p class="giohang-tieude">GIỎ HÀNG CỦA BẠN
                        <span>(<?php echo count($_SESSION["giohang"]) ?> sản phẩm)</span>
                    </p>
                    <div class="giohang-noidung">
                        <div class="giohang-sanpham">
                            <?php
                            $tongTien = 0;
                            foreach ($_SESSION["giohang"] as $item) {
                                $tongTien += $item["gia"]*$item['soluong'];
                            ?>
                                <div class="giohang-item">
                                    <div class="giohang-img">
                                        <img src="<?php echo $item["anh"]; ?>" alt="">
                                    </div>
                                    <div class="giohang-ten">
                                        <p><?php echo $item["ten"]; ?></p>
                                        <p><?php echo number_format($item["gia"]); ?><sup>đ</sup></p>
                                    </div>
                                    <div class="giohang-xoa">
                                        <a href="?role=user&action=xoagiohang&id=<?php echo $item["id"]; ?>"><i class="fa fa-times"></i></a>
                                    </div>
                                    <div class="giohang-soluong">
                                        <a href="?role=user&action=giam&id=<?php echo $item["id"]; ?>">-</a>
                                        <input type="text" readonly value="<?php echo $item["soluong"]; ?>">


                                        <a href="?role=user&action=tang&id=<?php echo $item["id"]; ?>">+</a>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            <?php } ?>
                        </div>
                        <div class="giohang-tongtien">
                            <span><b>Tổng tiền: </b></span>
                            <span><?php echo number_format($tongTien) ; ?><sup>đ</sup></span>
                        </div>
                        <div class="giohang-muahang">
                            <p class="muahang-tieude">Thông tin mua hàng</p>
                            <form action="?role=user&action=muahang" method="post">
                                <div class="muahang-item">
                                    <label for="">Họ và tên: </label>
                                    <input type="text" name="hoten" required placeholder="Nhập họ tên">

                                    <input type="hidden" name="tongtien" value="<?php echo $tongTien; ?>">
                                </div>
                                <div class="muahang-item">
                                    <label for="">Địa chỉ: </label>
                                    <input type="text" name="diachi" required placeholder="Nhập địa chỉ">
                                </div>
                                <div class="muahang-item">
                                    <label for="">Số điện thoại: </label>
                                    <input type="number" name="sdt" required placeholder="Nhập số điện thoại">
                                </div>
                                <div class="muahang-item">
                                    <label for="">Ghi chú: </label>
                                    <textarea name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
                                </div>
                                <div class="muahang-item muahang-btn">
                                    <button>ĐẶT VÉ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
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