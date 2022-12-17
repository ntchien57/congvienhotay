<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./views/assets/css/admin.css">
    <link rel="stylesheet" href="./views/assets/css/datatables.min.css">
    <link rel="stylesheet" href="./views/assets/font-awesome-4.7.0/css/font-awesome.css">
    <script src="./views/assets/js/jquery-3.5.1.min.js"></script>
    <script src="./views/assets/js/jquery.dataTables.min.js"></script>
    <script src="./views/assets/js/admin.js"></script>
    <title>Chi tiết hóa đơn</title>
</head>
<body name="hoadon">
<div class="wrapper">
    <?php include_once "./views/admin/header.php"?>
    <div class="content">
        <?php include_once "./views/admin/sidebar.php"?>
        <div class="content-page">
            <div class="title">
                <h4>Chi tiết hóa đơn</h4>
            </div>
            <div class="quanly">
                <div class="info">
                    <div class="info-box">
                        <div class="info-item">
                            <span><b>Họ tên: </b></span>
                            <span><?php echo $data[0]["tenKH"]  ?></span>
                        </div>
                        <div class="info-item">
                            <span><b>Địa chỉ: </b></span>
                            <span><?php echo $data[0]["diachi"]  ?></span>
                        </div>
                        <div class="info-item">
                            <span><b>Điện thoại: </b></span>
                            <span><?php echo $data[0]["sdt"]  ?></span>
                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-item">
                            <span><b>Ghi chú: </b></span>
                            <span><?php echo $data[0]["ghichu"]  ?></span>
                        </div>

                    </div>
                </div>

                <table class="table-list">
                    <thead>
                    <tr>
                        <th class="txt-center"></th>
                        <th>Tên</th>
                        <th class="txt-center">Giá</th>
                        <th>Đặc điểm nổi bật</th>
                        <th>Số lượng</th>
                    </tr>
                    </thead>
                    <tbody>                                   
                        <tr>
                            <td class="txt-center"><img src="<?php echo $chitiet["anhminhhoa"] ?>" alt=""></td>
                            <td><?php echo $chitiet["tenTC"] ?></td>
                            <td class="txt-center"><?php echo $chitiet["gia"] ?></td>
                            <td><?php
                                $dacdiem = explode(";",$chitiet["dacdiemnoibat"]);
                                foreach ($dacdiem as $item) {
                                    echo '<p><i class="fa fa-check-circle" style="margin-right: 5px"></i>'.$item.'</p>';
                                }
                            ?></td>
                            <td><?php echo $chitiet["soluong"] ?></td>
                        </tr>
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(".table-list").dataTable({
            "language": {
                "lengthMenu": "Hiển thị _MENU_ bản ghi",
                "zeroRecords": "Không có bản ghi nào",
                "info": "Hiển thị trang _PAGE_ của _PAGES_",
                "infoEmpty": "Không có bản ghi nào",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Tìm kiếm",
                "paginate": {
                    "first":      "Đầu",
                    "last":       "Cuối",
                    "next":       "Trang tiếp",
                    "previous":   "Trang trước"
                },
            }
        });
    </script>
</div>
</body>
</html>
