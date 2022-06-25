<?php
    require_once 'Models/login.php';
    Class LoginController {
        var $login_model;
        public function __construct() {
            $this->login_model = new Login();
        }
        function login() {
            $data_danhmuc = $this->login_model->danhmuc();
            $data_chitietDM = array();
            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
            }
            require_once('Views/index.php');
        }
        // ok
        function login_action() {
            $taikhoan = $_POST['TaiKhoan'];
            $matkhau = md5($_POST['MatKhau']);
            if (strpos($taikhoan, "'") != false) {
                $taikhoan = str_replace("'", "\'", $taikhoan);
            }
            $data = array(
                'TaiKhoan' => $taikhoan,
                'MatKhau' => $matkhau,
            );
            $this->login_model->login_action($data);
        }

        function dangky() {
            $check1 = 0;
            $check2 = 0;
            $data_check = $this->login_model->check_account();
            foreach ($data_check as $value) {
                if ($value['Email'] == $_POST['Email'] || $value['TaiKhoan'] == $_POST['TaiKhoan'] || $value['SDT'] == $_POST['SDT']) {
                    $check1 = 1;
                }
            }
            if ($_POST['MatKhau'] != $_POST['Check_MatKhau']) {
                $check2 = 1;
            }
            $data_tk = array(
                'TaiKhoan' => $_POST['TaiKhoan'],
                'MatKhau' => md5($_POST['MatKhau']),
                'MaPQ' => 3,
                'TrangThai' => 1
            );
            foreach ($data_tk as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data_tk[$key] = $value;
                }
            }
            $this->login_model->dangky_tk($data_tk, $check1, $check2);

            $data_kh = array(
                'TenKH' => $_POST['TenKH'],
                'SDT' => $_POST['SDT'],
                'DiaChi' => $_POST['DiaChi'],
                'Email' => $_POST['Email'],
                'GioiTinh' => $_POST['GioiTinh'],
            );
            foreach ($data_kh as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data_kh[$key] = $value;
                }
            }

            $sum_tk = $this->login_model->sum_tk();
            foreach($sum_tk as $value){
                $sum = $value['sum'];
            }

            $this->login_model->dangky_kh($data_kh, $sum, $check1, $check2);
        }
        function my_order() {
            $matk = $_SESSION['login']['MaTK'];
            $data_kh = $this->login_model->data_kh($matk);
            $makh = $data_kh['MaKH'];
            $data_my_order = $this->login_model->my_order($makh);
            require_once('Views/index.php');
        }
        function delete_order() {
            if (isset($_GET['id'])) {
                $this->login_model->delete($_GET['id']);
            }
        }
        function dangxuat() {
            $this->login_model->logout();
        }
        function account() {
            $data_danhmuc = $this->login_model->danhmuc();
            $data_chitietDM = array();
            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
            }
            $data = $this->login_model->account();
            require_once('Views/index.php');
        }
        function update() {
            if (isset($_POST['Ho'])) {
                $data = array(
                    'Ho' => $_POST['Ho'],
                    'Ten' => $_POST['Ten'],
                    'GioiTinh' => $_POST['GioiTinh'],
                    'SDT' => $_POST['SĐT'],
                    'Email' => $_POST['Email'],
                    'DiaChi' => $_POST['DiaChi'],
                );
                foreach ($data as $key => $value) {
                    if (strpos($value, "'") != false) {
                        $value = str_replace("'", "\'", $value);
                        $data[$key] = $value;
                    }
                }
                $this->login_model->update_account($data);
            } else {
                if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                    if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                        $data = array('MatKhau' => md5($_POST['MatKhauMoi']));
                        $this->login_model->update_account($data);
                    } else {
                        setcookie('doimk', 'Mật khẩu không đúng', time() + 2);
                    }
                } else {
                    setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
                }
            }
            header('location: ?act=taikhoan&xuli=account#doitk');
        }
    }
?>