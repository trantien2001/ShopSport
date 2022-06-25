<?php
    require_once('MVC/Models/khachhang.php');
    class KhachHangController{
        var $khachhang_model;
        public function __construct() {
            $this->khachhang_model = new KhachHang();
        }
        public function list() {
            $data = $this->khachhang_model->All_kh();
            require_once('MVC/Views/Admin/index.php');
        }
        public function add() {
            require_once('MVC/Views/Admin/index.php');
        }
        public function detail() {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->khachhang_model->detail_kh($id);
            require_once('MVC/Views/Admin/index.php');
        }
        public function store() {
            $data_tk = array(
                'TaiKhoan' => $_POST['TaiKhoan'],
                'MatKhau' => md5($_POST['MatKhau']),
                'MaPQ' => 2,
                'TrangThai' => $_POST['TrangThai']
            );

            foreach($data_tk as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_tk[$key] = $value;
                }
            }
            $this->khachhang_model->dangky_tk($data_tk);

            $sum_tk = $this->login_model->sum_tk();
            foreach($sum_tk as $value){
                $sum = $value['sum'];
            }

            $data_kh = array(
                'TenKH' => $_POST['TenKH'],
                'SDT' => $_POST['SDT'],
                'Email' => $_POST['Email'],
                'CCCD' => $_POST['CCCD'],
                'GioiTinh' => $_POST['GioiTinh'],
                'NgaySinh' => $_POST['NgaySinh'],
                'Luong' => $_POST['Luong'],
                'MaTK' => 13
            );
            foreach($data_kh as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_kh[$key] = $value;
                }
            }
            $this->khachhang_model->store($data_kh);
        }
        public function delete() {
            $id = $_GET['id'];
            $matk = $_GET['matk'];
            if(isset($id)){
                $this->khachhang_model->delete_tk($matk);
                $this->khachhang_model->delete($id);
            }
        }
        public function edit() {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data_kh = $this->khachhang_model->detail_kh($id);
            require_once('MVC/Views/Admin/index.php');
        }
        public function update() {
            $data_tk = array(
                'MaTK' => $_POST['MaTK'],
                'TaiKhoan' => $_POST['TaiKhoan'],
                'MatKhau' => md5($_POST['MatKhau']),
                'MaPQ' => 2,
                'TrangThai' => $_POST['TrangThai']
            );

            foreach($data_tk as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_tk[$key] = $value;
                }
            }
            $this->khachhang_model->update_tk($data_tk);

            $data_kh = array(
                'MaKH' => $_POST['MaKH'],
                'TenKH' => $_POST['TenKH'],
                'SDT' => $_POST['SDT'],
                'DiaChi' => $_POST['DiaChi'],
                'Email' => $_POST['Email'],
                'GioiTinh' => $_POST['GioiTinh'],
            );
            foreach($data_kh as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_kh[$key] = $value;
                }
            }
            $this->khachhang_model->update($data_kh);
        }
    }
?>