<?php
session_start();
include_once("models/Model.php");

class AdminController
{

    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    //đăng nhập
    public function dangNhap() {
        include_once "views/admin/login/index.php";
        if(isset($_POST["username"])) {
            $user = $this->model->kiemTraDangNhap($_POST["username"],$_POST["password"]);
            if($user->num_rows > 0) {
                $user = $user->fetch_assoc();
                $_SESSION["display_name"] = $user["display_name"];
                header('Location: ?role=admin&page=trochoi');
            }
            else echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác.')</script>";
        }
    }

    public function dangXuat() {
        session_destroy();
        header('Location: ?role=admin&page=dangnhap');
    }

    // trò chơi
    public function quanLyTroChoi()
    {
        $trochoi = $this->model->layTroChoi();
        
        include_once "views/admin/trochoi/index.php";
    }
    public function themTroChoi() {
        if(isset($_POST["ten"])) {
            $ha_sp = '';
            if (isset($_FILES['anh'])) {

                if ($_FILES['anh']['error'] > 0)
                {
                    echo 'Upload ảnh lỗi.';
                }
                else {
                    move_uploaded_file($_FILES['anh']['tmp_name'], './views/assets/image/'.$_FILES['anh']['name']);
                    $ha_sp = "./views/assets/image/".$_FILES['anh']['name'];
                    if($this->model->themTC($_POST["ten"],$_POST["mota"],$_POST["daciemnoibat"],$_POST["gia"],$ha_sp)) {
                        header('Location: ?role=admin&page=trochoi');
                    }
                    else echo 'Thêm thất bại';
                }
            }

        }
        include_once "views/admin/trochoi/them.php";
    }
    public function suaTroChoi() {
        $id = $_GET["id_sua"];
        if(!isset($_POST["ten"])) $trochoi = $this->model->layTroChoiId($id)->fetch_assoc();
        else {
            $ha_tc = $_POST["anh_cu"];
            if (isset($_FILES['anh'])) {
                if ($_FILES['anh']['error'] > 0)
                {
                    echo 'Upload ảnh lỗi.';
                }
                else {
                    move_uploaded_file($_FILES['anh']['tmp_name'], './views/assets/image/'.$_FILES['anh']['name']);
                    $ha_tc = "./views/assets/image/".$_FILES['anh']['name'];
                }
            }

            if($this->model->suaTC($id,$_POST["ten"],$_POST["mota"],$_POST["dacdiemnoibat"],$_POST["gia"],$ha_tc )) {
                header('Location: ?role=admin&page=trochoi');
            }
            else echo 'Sửa thất bại';
        }
        include_once "views/admin/trochoi/sua.php";
    }
    public function xoaTroChoi()
    {
        $id=$_GET["id_xoa"];
        if($this->model->xoaTC($id)) {
            header('Location: ?role=admin&page=trochoi');
        }
        else echo 'Xóa thất bại';
    }

    // quản lý tài khoản

    public function quanLyTaiKhoan()
    {
        $taikhoan = $this->model->layTaiKhoan();
        
        include_once "views/admin/taikhoan/index.php";
    }

    public function xoaTaiKhoan()
    {
        $id=$_GET["id_xoa"];
        if($this->model->xoaTK($id)) {
            header('Location: ?role=admin&page=taikhoan');
        }
        else echo 'Xóa thất bại';
    }

    // hóa đơn
    public function quanLyHoaDon()
    {
        $hoadon = $this->model->layHoaDon();
        include_once "views/admin/hoadon/index.php";
    }
    public function xoaHoaDon()
    {
        $id=$_GET["id_xoa"];
        if($this->model->xoaHD($id)) {
            header('Location: ?role=admin&page=hoadon');
        }
        else echo 'Xóa thất bại';
    }
    public function chiTietHoaDon() {
        $data = [];
        $id = $_GET["id"];
        $row = $this->model->chiTietHD($id);

        $chitiet = $row->fetch_array();

         array_push($data,$chitiet);

        include_once "views/admin/hoadon/chitiet.php";
    }


}