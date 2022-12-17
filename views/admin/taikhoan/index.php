<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./views/assets/css/admin.css">
    <link rel="stylesheet" href="./views/assets/css/datatables.min.css">
    <link rel="stylesheet" href="./views/assets/font-awesome-4.7.0/css/font-awesome.css">
    <script src="./views/assets/js/jquery-3.5.1.min.js"></script>
    <script src="./views/assets/js/jquery.dataTables.min.js"></script>
    <script src="./views/assets/js/admin.js"></script>
    <title>Quản lý tài khoản</title>
</head>

<body name="taikhoan">
    <div class="wrapper">
        <?php include_once "./views/admin/header.php" ?>
        <div class="content">
            <?php include_once "./views/admin/sidebar.php" ?>
            <div class="content-page">
                <div class="title">
                    <h4>Quản lý tài khoản</h4>
                </div>
                <div class="quanly">
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th width="200">Username</th>
                                <th>Password</th>
                                <th class="txt-center" width="100">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($taikhoan->num_rows > 0) while ($row = $taikhoan->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $row["username"] ?></td>
                                    <td><?php echo $row["password"] ?></td>
                                    <td class="txt-center btn-thaotac">
                                        <a href="?role=admin&page=taikhoan&action=sua&id_sua=<?php echo $row["id"] ?>" class="edit"><i class="fa fa-pencil"></i></a>
                                        <a onclick="return confirm('Chắc chắn xóa?')" href="?role=admin&page=taikhoan&action=xoa&id_xoa=<?php echo $row["id"] ?>" class="delete"><i class="fa fa-trash"></i></a>
                                    </td>
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
            "language": {
                "lengthMenu": "Hiển thị _MENU_ bản ghi",
                "zeroRecords": "Không có bản ghi nào",
                "info": "Hiển thị trang _PAGE_ của _PAGES_",
                "infoEmpty": "Không có bản ghi nào",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Tìm kiếm",
                "paginate": {
                    "first": "Đầu",
                    "last": "Cuối",
                    "next": "Trang tiếp",
                    "previous": "Trang trước"
                },
            }
        });
    </script>
</body>

</html>