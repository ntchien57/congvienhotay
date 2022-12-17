<?php
session_start();
include_once("models/Model.php");
class UserController
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function dangNhap() {
        if(isset($_POST["username"])) {
            $user = $this->model->kiemTraDangNhapUser($_POST["username"],$_POST["password"]);
            if($user->num_rows > 0) {
                $user = $user->fetch_assoc();
                $_SESSION["display_name"] = $user["display_name"];
                header('Location: ?role=user');
            }
            else echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác.')</script>";
        }
        include_once  "views/user/dangnhap.php";
    }

    public function dangKy() {
        if(isset($_POST["username"])) {
            $user = $this->model->dangKyUser($_POST["username"],$_POST["display-name"],$_POST["password"]);
            if($user) {
                header('Location: ?role=user&action=dangnhap');
            }
            else echo "<script>alert('Vui lòng đăng kí lại.')</script>";
        }
        include_once  "views/user/dangky.php";
    }

    public function dangXuat() {
        session_destroy();
        header('Location: ?role=user');
    }


    public function home() {
        $trochoi = $this->model->layTroChoi();
        include_once  "views/user/home.php";
    }

    public function timKiem() {
        if(isset($_POST["search"])) {
            $trochoi = $this->model->TK($_POST["search"]);
        }
        include_once  "views/user/search.php";
    }

    public function chiTiet() {
        $id = $_GET["id"];
        $trochoi = $this->model->laytrochoiId($id)->fetch_assoc();
        include_once  "views/user/chitiet.php";
    }

    public function gioHang() {
        include_once  "views/user/giohang.php";

    }
    public function themGioHang(){
        $id = $_GET["id"];
        $trochoi = $this->model->laytrochoiId($id)->fetch_assoc();
        if(isset($_SESSION["giohang"][$id])) {
            $_SESSION["giohang"][$id]["soluong"]++;
        }
        else {
            $sanpham = [
                'id' => $id,
                'ten' => $trochoi["ten"],
                'gia' => $trochoi["gia"],
                'anh' => $trochoi["anhminhhoa"],
                'soluong' => 1,
            ];
            $_SESSION["giohang"][$id] = $sanpham;
        }
        if($_GET["loai"] == "muangay") {
            header("Location: ?role=user&action=giohang");
        }
        else {
            header("Location: ?role=user&action=chitiet&id=$id");
        }

    }
    public function xoaGioHang() {
        $id = $_GET["id"];
        unset($_SESSION["giohang"][$id]);
        header("Location: ?role=user&action=giohang");
    }

    public function muaHang() {
        if(isset($_POST["hoten"])) {
            if($this->model->taoHoaDon($_POST["hoten"],$_POST["diachi"],$_POST["sdt"],$_POST["ghichu"],$_POST["tongtien"])) {
                $_SESSION["thongbao"] = "Đặt hàng thành công, chờ duyệt.";
                unset($_SESSION["giohang"]);
                header("Location: ?role=user&action=giohang");
            }
            else echo "Mua thất bại";
        }
    }
    public function tangGiamsl()
    {
        $id=$_GET["id"];
        if($_GET["action"]=="tang")
        {
             $_SESSION["giohang"][$id]["soluong"]++;
        }
        else
        {
            if($_SESSION["giohang"][$id]["soluong"] > 0)
             $_SESSION["giohang"][$id]["soluong"]--;
        }
        header("Location: ?role=user&action=giohang");
    }
}