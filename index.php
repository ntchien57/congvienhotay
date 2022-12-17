<?php
    $role = $_GET["role"]; 
    if(!isset($role)) {
        
        header('Location: ?role=user');
    }else {
        if($role == "admin") {
            include_once "controllers/admin/AdminController.php";
            $adminController = new AdminController();
            if(!isset($_GET["page"])) {
                if(!isset($_SESSION["display_name"])) header('Location: ?role=admin&page=dangnhap');
                else header('Location: ?role=admin&page=trochoi');

            }
            else {

                switch ($_GET["page"]) {
                    case 'dangnhap' : {
                        $adminController->dangNhap();
                        break;
                    }
                    case 'dangxuat' : {
                        $adminController->dangXuat();
                        break;
                    }
                    case 'trochoi' : {
                        if(!isset($_SESSION["display_name"])) header('Location: ?role=admin&page=dangnhap');
                        if(!isset($_GET["action"])) {
                            $adminController->quanLyTroChoi();
                        }
                        else {
                            switch ($_GET["action"]) {
                                case 'them' : {
                                    $adminController->themTroChoi();
                                    break;
                                }
                                case 'sua' : {
                                    $adminController->suaTroChoi();
                                    break;
                                }
                                case 'xoa' : {
                                    $adminController->xoaTroChoi();
                                    break;
                                }
                            }
                        }
                        break;
                    }
                    case 'taikhoan' : {
                        if(!isset($_SESSION["display_name"])) header('Location: ?role=admin&page=dangnhap');
                        if(!isset($_GET["action"])) {
                            $adminController->quanLyTaiKhoan();
                        }
                        else {
                            switch ($_GET["action"]) {
                                case 'xoa' : {
                                    $adminController->xoaTaiKhoan();
                                    break;
                                }
                            }
                        }
                        break;
                    }
                    case 'hoadon' : {
                        if(!isset($_SESSION["display_name"])) header('Location: ?role=admin&page=dangnhap');
                        if(!isset($_GET["action"])) {
                            $adminController->quanLyHoaDon();
                        }
                        else {
                            switch ($_GET["action"]) {
                                case 'xoa' : {
                                    $adminController->xoaHoaDon();
                                    break;
                                }
                                case 'chitiet' : {
                                    $adminController->chiTietHoaDon();
                                    break;
                                }
                            }
                        }
                        break;
                    }
                    
                }
            }
        }
        else if($role == "user") {
            include_once "controllers/user/UserController.php";
            $userController = new UserController();
            if(!isset($_GET["action"])) {
                $userController->home();
            }
            else {
                switch ($_GET["action"]) {
                    case 'dangnhap' : {
                        $userController->dangNhap();
                        break;
                    }
                    case 'dangxuat' : {
                        $userController->dangXuat();
                        break;
                    }
                    case 'dangky' : {
                        $userController->dangKy();
                        break;
                    }
                    case 'timkiem' : {
                        $userController->timKiem();
                        break;
                    }
                    case 'chitiet' : {
                        $userController->chiTiet();
                        break;
                    }
                    case 'giohang' : {
                        $userController->gioHang();
                        break;
                    }
                    case 'themgiohang' : {
                        $userController->themGioHang(); 
                        break;
                    }
                    case 'xoagiohang' : {
                        $userController->xoaGioHang();
                        break;
                    }
                    case 'muahang' : {
                        $userController->muaHang();
                        break;
                    }
                    case 'tang' : {
                        $userController->tangGiamsl();
                        break;
                    }
                    case 'giam' : {
                        $userController->tangGiamsl();
                        break;
                    }
                }
            }

        }
    }
?>