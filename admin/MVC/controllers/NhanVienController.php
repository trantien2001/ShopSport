<?php
    require_once('MVC/Models/nhanvien.php');
    class NhanVienController{
        var $nhanvien_model;
        public function __construct() {
            $this->nhanvien_model = new NhanVien();
        }
        public function list() {
            $data = $this->nhanvien_model->All();
            require_once('MVC/Views/Admin/index.php');
        }
        public function add() {
            require_once('MVC/Views/Admin/index.php');
        }
        public function detail() {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->nhanvien_model->detail_nv($id);
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
            $this->nhanvien_model->dangky_tk($data_tk);

            $sum_tk = $this->nhanvien_model->sum_tk();
            foreach($sum_tk as $value){
                $sum = $value['sum'];
            }

            $data_nv = array(
                'TenNV' => $_POST['TenNV'],
                'SDT' => $_POST['SDT'],
                'Email' => $_POST['Email'],
                'CCCD' => $_POST['CCCD'],
                'GioiTinh' => $_POST['GioiTinh'],
                'NgaySinh' => $_POST['NgaySinh'],
                'Luong' => $_POST['Luong'],
                'MaTK' => $sum,
            );
            foreach($data_nv as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_nv[$key] = $value;
                }
            }
            $this->nhanvien_model->store($data_nv);
        }
        public function delete() {
            $id = $_GET['id'];
            $matk = $_GET['matk'];
            if(isset($id)){
                $this->nhanvien_model->delete_tk($matk);
                $this->nhanvien_model->delete($id);
            }
        }
        public function edit() {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            // $data_nv = $this->nhanvien_model->nhanvien();
            $data_nv = $this->nhanvien_model->detail_nv($id);
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
            $this->nhanvien_model->update_tk($data_tk);

            $data_nv = array(
                'MaNV' => $_POST['MaNV'],
                'TenNV' => $_POST['TenNV'],
                'SDT' => $_POST['SDT'],
                'Email' => $_POST['Email'],
                'CCCD' => $_POST['CCCD'],
                'GioiTinh' => $_POST['GioiTinh'],
                'NgaySinh' => $_POST['NgaySinh'],
                'Luong' => $_POST['Luong'],
            );
            foreach($data_nv as $key => $value) {
                if(strpos($value, "'") != false) {
                    $value = str_replace("'","\'",$value);
                    $data_nv[$key] = $value;
                }
            }
            $this->nhanvien_model->update($data_nv);
        }
    }
?>