<?php


class Model
{
    public $conn;
    public function __construct()
    {
        $this->conn = new mysqli("localhost","root","","congvienhotay")  or die("Ket noi that bai");
        $this->conn->set_charset("UTF8");
    }
    
    public function kiemTraDangNhap($username,$password,$role = 1) {
        $sql = "select * from user where username = '$username' and password = '$password' and role =$role ";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function kiemTraDangNhapUser($username,$password,$role = 0) {
        $sql = "select * from user where username = '$username' and password = '$password' and role =$role ";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function dangKyUser($username,$displayname,$password,$role = 0) {
        $sql = "insert into user( username,display_name,password,role) values ('$username','$displayname','$password',$role) ";
        $result = $this->conn->query($sql);
        return $result;
    }

    // admin
    public function layTroChoi() {
        $sql = "select * from trochoi";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function layTroChoiId($id) {
        $sql = "select * from trochoi where id = $id";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function themTC($ten, $mota, $dacdiemnoibat, $gia,$anh,)
    {
        $sql= "insert into trochoi( tenTC,mota, dacdiemnoibat, gia, anhminhhoa) values( '$ten', '$mota','$dacdiemnoibat', $gia, '$anh')";
        $result= $this->conn->query($sql);
        return $result;
    }
    public function suaTC($id, $ten,$mota,$dacdiemnoibat,$gia,$anh)
    {
        $sql="update trochoi set tenTC='$ten',  mota='$mota', dacdiemnoibat='$dacdiemnoibat', gia=$gia, anhminhhoa='$anh' where id=$id";
        var_dump($sql);
                $result= $this->conn->query($sql);
        return $result;
    }
    public function xoaTC($id)
    {
        $sql="delete from trochoi where id=$id";
        $result= $this->conn->query($sql);
        return $result;
    }
    //tài khoản

    public function layTaiKhoan() {
        $sql = "select * from user";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function xoaTK($id)
    {
        $sql="delete from user where id=$id";
        $result= $this->conn->query($sql);
        return $result;
    }

    // hóa đơn
    public function layHoaDon() {
        $sql = "select hoadon.*, khachhang.tenKH,khachhang.diachi,khachhang.sdt from hoadon inner join khachhang on khachhang.id = hoadon.khachhang_id";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function layHoaDonId($id) {
        $sql = "select hoadon.*, khachhang.tenKH,khachhang.diachi,khachhang.sdt from hoadon inner join khachhang on khachhang.id = hoadon.khachhang_id where hoadon.id = $id";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function layChiTietHoaDon($id) {
        $sql = "select * from chitiethoadon where id_hd = $id";
        $result = $this->conn->query($sql);
        return $result;
    }


    public function duyetHD($id, $trangthai)
    {
        $sql="update hoadon set trangthai=$trangthai where id=$id";
        $result= $this->conn->query($sql);
        return $result;
    }
    public function xoaHD($id)
    {
        $sql="delete from hoadon where id=$id";
        $result= $this->conn->query($sql);
        return $result;
    }
    public function chiTietHD($id) {
        $sql="select * from chitiethoadon inner join trochoi on chitiethoadon.id_sp = trochoi.id join hoadon on chitiethoadon.id_hd = hoadon.id join khachhang on hoadon.khachhang_id = khachhang.id where id_hd = $id";
        $result= $this->conn->query($sql);
        return $result;
    }

    // user
    public function TK($search) {
        $sql ="select * from trochoi where tenTC like '%$search%'";
        $result = $this->conn->query($sql);
        return $result;
    }


    public function taoHoaDon($hoten,$diachi,$sdt,$ghichu,$tongtien) {
            $sql = "insert into khachhang(tenKH,diachi,sdt) values('$hoten','$diachi','$sdt')";
            $this->conn->query($sql);
            $khachhang_id = $this->conn->insert_id;

            $sql = "insert into hoadon(khachhang_id,ghichu,tongtien) values($khachhang_id,'$ghichu',$tongtien)";
            $result = $this->conn->query($sql);
        if($result) {
            $idHoaDon = $this->conn->insert_id;
            foreach ($_SESSION["giohang"] as $item) {
                if($this->ktraHoaDon($item["id"],$item["soluong"]))
                {
                    $idSp = $item["id"];
                    $gia = $item["gia"];
                    $soluong = $item["soluong"];
                    $sql= "insert into chitiethoadon(id_sp,id_hd,gia,soluong) values($idSp,$idHoaDon,$gia,$soluong)";
                    $this->conn->query($sql);
                }
                else
                {
                    return false;
                }

            }
        }
        return true;
    }
    public function ktraHoaDon($id)
    {
        $sql= "select * from trochoi where id=$id";
        $result= $this->conn->query($sql)->fetch_assoc();
        return true;
    }
}