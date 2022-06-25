<?php
    require_once('model.php');
    class Login extends Model {
        var $con;
        function __construct() {
            $con_obj = new connect();
            $this->con = $con_obj->con;
        }
        function delete($id){
            $query1 = "DELETE FROM chitietdonhang where MaDH =$id";
            $query2 = "DELETE FROM hoadon where MaDH =$id";
            $status1 = $this->con->query($query1);
            $status2 = $this->con->query($query2);
            if ($status1 == true && $status2 == true) {
                setcookie('msg', 'Xóa thành công', time() + 2);
            } else {
                setcookie('msg', 'Xóa không thành công', time() + 2);
            }
            header('Location: ?act=taikhoan&xuli=my_order');
        }
        // login ok
        function login_action($data) {
            $query = "SELECT * FROM taikhoan WHERE TaiKhoan = '".$data['TaiKhoan']."'AND MatKhau = '".$data['MatKhau']."'AND TrangThai = 1";
            $login = $this->con->query($query)->fetch_assoc();
            if($login !== null) {
                switch ($login['MaPQ']){
                    case 1:
                        $_SESSION['isLoginAdmin'] = true;
                        $_SESSION['login'] = $login;
                        break;
                    case 2:
                        $_SESSION['isLoginShipper'] = true;
                        $_SESSION['login'] = $login;
                        break;
                    case 3:
                        $_SESSION['isLoginCustomer'] = true;
                        $_SESSION['login'] = $login;
                        break;
                    default:
                        $_SESSION['isLoginCustomer'] = true;
                        $_SESSION['login'] = $login;
                        break;
                }
                header('Location: ?mod=login');
            } else {
                setcookie('msg1', 'Tài khoản hoặc mật khẩu chưa chính xác', time() + 5);
                header('Location: ?act=taikhoan#dangnhap');
            }
        }
        // logout ok
        function logout() {
            if(isset($_SESSION['isLoginAdmin'])) {
                unset($_SESSION['isLoginAdmin']);
            }
            if(isset($_SESSION['isLoginShipper'])) {
                unset($_SESSION['isLoginShipper']);
            }
            if(isset($_SESSION['isLoginCustomer'])) {
                unset($_SESSION['isLoginCustomer']);
            }
            unset($_SESSION['login']);
            header('Location: ?act=home');
        }

        function check_account() {
            $query = "SELECT tk.TaiKhoan, kh.SDT, kh.Email FROM taikhoan as tk, khachhang as kh WHERE tk.MaTK=kh.MaTK";
            require('result.php');
            return $data;
        }

        function dangky_tk($data_tk, $check1, $check2) {
            if($check1 == 0) {
                if($check2 == 0) {
                    $k_tk = "";
                    $v_tk = "";
                    foreach($data_tk as $key => $value) {
                        $k_tk .= $key . ",";
                        $v_tk .= "'" . $value . "',";
                    }
                    $k_tk = trim($k_tk, ",");
                    $v_tk = trim($v_tk, ",");
                    $query = "INSERT INTO taikhoan($k_tk) VALUES ($v_tk);";
                    $status_tk = $this->con->query($query);

                    if($status_tk == true) {
                        setcookie('msg', 'Đăng ký thành công', time() + 2);
                    } else {
                        setcookie('msg', 'Đăng ký thất bại', time() + 2);
                    }
                } else {
                    setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
                }
            } else {
                setcookie('msg', 'Tài khoản đã tồn tại, vui lòng đăng ký tài khoản khác', time() + 2);
            }
            header('Location: ?act=register');
        }

        function dangky_kh($data_kh, $sum, $check1, $check2) {
            if($check1 == 0) {
                if($check2 == 0) {
                    $k_kh = "";
                    $v_kh = "";
                    foreach($data_kh as $key => $value) {
                        $k_kh .= $key . ",";
                        $v_kh .= "'" . $value . "',";
                    }
                    $k_kh .= "MaTK";
                    $v_kh .= (int)$sum;
                    $k_kh = trim($k_kh, ",");
                    $v_kh = trim($v_kh, ",");
                    $query_kh = "INSERT INTO khachhang($k_kh) VALUES ($v_kh);";
                    $status_kh = $this->con->query($query_kh);
                    if($status_kh == true) {
                        setcookie('msg', 'Đăng ký thành công', time() + 2);
                    }
                    else {
                        setcookie('msg', 'Đăng ký thất bại', time() + 2);
                    }
                } else {
                    setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
                }
            } else {
                setcookie('msg', 'Tài khoản đã tồn tại, vui lòng đăng ký tài khoản khác', time() + 2);
            }
            header('Location: ?act=register');
        }
        function account() {
            $id = $_SESSION['login']['MaTK'];
            $query = "SELECT * FROM TaiKhoan as tk, nhanvien as nv, khachhang as kh 
                WHERE nv.MaTK=tk.MaTK and kh.MaTK=tk.MaTK and tk.MaTK = $id";
            return $this->con->query($query)->fetch_assoc();
        }

        function update_account($data) {
            $v = "";
            foreach($data as $key => $value) {
                $v .= $key . '=' . $value . '",';
            }
            $v = trim($v, ',');
            $query = 'UPDATE TaiKhoan SET $v WHERE MaTK = ' . $_SESSION['login']['MaTK'];
            $result = $this->con->query($query);
            if($result) {
                setcookie('doimk', 'Cập nhật tài khoản thành công', time() + 2);
            } else {
                setcookie('doimk', 'Cập nhật tài khoản thất bại, xem lại mật khẩu', time() + 2);
            }
            header('Location: ?act=taikhoan&xuli=account#doitk');
        }

        function error() {
            header('Location: ?act=errors');
        }
    }
?>