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

        #header {
            position: fixed;
            top: 0;
            z-index: 0;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
        }

        */
    </style>
</head>

<body>
    <?php include_once "./views/user/header.php" ?>
    <div class="wrapper" style="padding:10% 0">
        <div class="content">
            <div class="slide-banner">
                <div class="slide">
                    <div class="owl-theme">
                        <div class="item"><img src="./views/assets/image/banner1.jpg" alt=""></div>
                        <div class="item"><img src="./views/assets/image/banner2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="banner">

                    <!-- <div class="banner-item">
                        <img src="./views/assets/image/banner3.jpeg" alt="">
                    </div>

                    <div class="banner-item">
                        <img src="./views/assets/image/banner5.jpeg" alt="">
                    </div> -->
                    <div class="banner-item">
                        <img src="./views/assets/image/banner6.jpg" alt="">
                    </div>
                </div>

            </div>
            <div class="phone-hot">
                <div class="title">
                    <h3 style="text-transform:uppercase">Các trò chơi phổ biến</h3>
                </div>

                <div class="phone-content">
                    <?php $i = 0;
                    if ($trochoi->num_rows > 0) foreach ($trochoi as $item) {
                        if ($i == 6) break;
                    ?>
                        <div class="phone-item">
                            <a href=?role=user&action=chitiet&id=<?php echo $item["id"] ?>>
                                <p class="phone-name"><?php echo $item["tenTC"] ?></p>
                                <p style="color:red" class="phone-price"><?php echo number_format($item["gia"]) ?><sup>đ</sup></p>
                                <div class="phone-desc">
                                    <div class="phone-km">
                                        <?php
                                        $dacdiem = explode(";", $item["dacdiemnoibat"]);
                                        foreach ($dacdiem as $dd) {
                                        ?>
                                            <div class="km-item">
                                                <i class="fa fa-check-circle"></i>
                                                <span><?php echo $dd ?></span>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="list-km">
                                            <p class="list-km-title">Khuyến mại</p>
                                            <div>
                                                <div class="list-km-item">
                                                    <img src="./views/assets/image/0d.png" alt="">
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
                    <?php $i++;
                    } ?>
                </div>
            </div>
            <div class="phone-hot" id="banggiachothuedo">
                <div class="title">
                    <h3 style="text-transform:uppercase">Bảng giá cho thuê đồ</h3>
                </div>
                <div class="phone-content" style="display: flex;text-align: center ;">
                    <img style="border-radius:15px; width:500px" src="./views/assets/image/giathuedoboi.jpg" alt="">
                    <div>
                        <span style="font-size:16;color:red;text-transform:uppercase">Giá thuê đồ bơi</span>
                        <p style="padding: 30px 50px; font-size:16">Đến công viên Nước vui chơi nhưng bạn chưa có đồ bơi? Đừng lo, đã có dịch vụ cho thuê đồ bơi của công viên Hồ Tây. Hàng trăm mẫu mã khác nhau tha hồ cho bạn lựa chọn. Đồ bơi nam, đồ bơi nữ, đồ bơi trẻ em với đầy đủ kích cỡ, đáp ứng nhu cầu của tất cả mọi người. Bạn có thể tham khảo giá thuê đồ bơi dưới đây nhé ...</p>
                    </div>
                </div>
                <div class="phone-content" style="display: flex;text-align: center; padding-top:30px">
                    <img style="border-radius:15px;width:300px" src="./views/assets/image/giathuetudo.jpg" alt="">
                    <div>
                        <span style="font-size:16;color:red;text-transform:uppercase">Giá thuê tủ gửi đồ</span>
                        <p style="padding: 30px 50px; font-size:16">Bạn đang có dự định đi chơi công viên Nước Hồ Tây nhưng băn khoăn về việc: đến đó thì gửi đồ ở đâu? giá dịch vụ này như thế nào? Đừng lo, công viên Nước Hồ Tây có 2 khu gửi đồ với hàng ngàn tủ lớn và nhỏ, đáp ứng nhu cầu gửi đồ của quý khách với giá thuê rất phải chăng.</p>
                    </div>
                </div>
            </div>
            <div class="pk-giatot" id="banggiave">
                <div class="title">
                    <h3 style="text-transform:uppercase">Bảng giá vé</h3>
                </div>
                <div class="phukien-content">
                    <div style="display:flex;justify-content:center; padding-top:20px">
                        <table align="center" border="1" cellpadding="5" cellspacing="0" style="width: 762px;">
                            <tbody>
                                <tr>
                                    <td colspan="1" rowspan="2" style="text-align: center;">
                                        <strong>Công viên Nước</strong>
                                    </td>
                                    <td colspan="2" style="text-align: center;">
                                        <strong>Khách cao trên 1m35</strong>
                                    </td>
                                    <td colspan="2" style="text-align: center;">
                                        <strong>Khách cao từ 0.9m - 1m35</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        Ngày thường</td>
                                    <td style="text-align: center;">
                                        Thứ 7, chủ nhật, ngày lễ</td>
                                    <td style="text-align: center;">
                                        Ngày thường</td>
                                    <td style="text-align: center;">
                                        Thứ 7, chủ nhật, ngày lễ</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        Trước 17h</td>
                                    <td style="text-align: center;">
                                        <span style="color: rgb(255, 0, 0);">&nbsp;155.000đ&nbsp;&nbsp;</span>
                                    </td>
                                    <td style="text-align: center;">
                                        <span style="color: rgb(255, 0, 0);">180.000đ</span>
                                    </td>
                                    <td style="text-align: center;">
                                        &nbsp;130.000đ&nbsp;&nbsp;</td>
                                    <td style="text-align: center;">
                                        150.000đ</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">
                                        Sau 16h30</td>
                                    <td colspan="4" rowspan="1" style="text-align: center;">
                                        <strong>Giờ giảm giá cuối tuần, khuyến mại còn 100.000đ</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <?php include_once "./views/user/footer.php" ?>
</body>

</html>