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
    <title>Quản lý trò chơi</title>
</head>
<body name="trochoi">
    <div class="wrapper">
        <?php include_once "./views/admin/header.php"?>
        <div class="content">
            <?php include_once "./views/admin/sidebar.php"?>
            <div class="content-page">
                <div class="title">
                    <h4>Quản lý trò chơi</h4>
                </div>
                <div class="quanly">
                    <div class="btn-them">
                        <a href="?role=admin&page=trochoi&action=them"><button><i class="fa fa-plus"></i>Thêm</button></a>
                    </div>
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th class="txt-center"></th>
                                <th>Tên trò chơi</th>
                                <th class="txt-center">Giá</th>
                                <th>Đặc điểm nổi bật</th>
                                <th class="txt-center">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 foreach ($trochoi as $row) {
                            ?>
                                    <tr>

                                        <td class="txt-center"><img src="<?php echo $row["anhminhhoa"] ?>" alt=""></td>
                                        <td><?php echo $row["tenTC"] ?></td>
                                        <td class="txt-center"><?php echo $row["gia"] ?></td>

                                        <td><?php
                                                $dacdiem = explode(";",$row["dacdiemnoibat"]);
                                                foreach ($dacdiem as $item) {
                                                    echo '<p><i class="fa fa-check-circle" style="margin-right: 5px"></i>'.$item.'</p>';
                                                }
                                            ?></td>
                                        <td class="txt-center btn-thaotac">
                                            <a href="#" class="view"><i class="fa fa-eye"></i></a>
                                            <a href="?role=admin&page=trochoi&action=sua&id_sua=<?php echo $row["id"] ?>" class="edit"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Chắc chắn xóa?')" href="?role=admin&page=trochoi&action=xoa&id_xoa=<?php echo $row["id"] ?>" class="delete"><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                    
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $(".sidebar li[name=" + $("body").attr("name") + "]").addClass("active");
        })
    </script>
    <script>
        $(".table-list").dataTable({
            "bLengthChange": false,
            "pageLength": 5,
            "language": {
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
</body>
</html>
