<?php
require_once("MVC/Models/sanpham.php");
class SanphamController {
    var $sanpham_model;
    public function __construct() {
        $this->sanpham_model = new sanpham();
    }
    public function list() {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
    }
    public function detail() {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
    }
    public function add() {
        // $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        // $data_dm = $this->sanpham_model->danhmuc();
        require_once("MVC/Views/Admin/index.php");
    }
    public function store() {
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'TenSP'  =>   $_POST['TenSP'],
            'SoLuong' => $_POST['SoLuong'],
            'GiaBan' => $_POST['GiaBan'],
            'MaLoai' =>    $_POST['MaLoai'],
            'TrangThai' => 1,
            'ThoiGian' => $ThoiGian,
            'MoTa1' =>  $_POST['MoTa1'],
            'MoTa2' =>  $_POST['MoTa2'],
            'MoTa3' =>  $_POST['MoTa3'],
            'MoTa4' =>  $_POST['MoTa4'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->sanpham_model->store($data);


        $target_dir = "../library/images/";  // thư mục chứa file upload

        $Hinh1 = "";
        $target_file = $target_dir . basename($_FILES["Hinh1"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["Hinh1"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $Hinh1 =  "" . basename($_FILES["Hinh1"]["name"]);
        }

        $Hinh2 = "";
        $target_file = $target_dir . basename($_FILES["Hinh2"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["Hinh2"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $Hinh2 =  "" . basename($_FILES["Hinh2"]["name"]);
        }

        $Hinh3 = "";
        $target_file = $target_dir . basename($_FILES["Hinh3"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["Hinh3"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $Hinh3 =  "" . basename($_FILES["Hinh3"]["name"]);
        }
        $Hinh4 = "";
        $target_file = $target_dir . basename($_FILES["Hinh4"]["name"]); // link sẽ upload file lên
        $status_upload = move_uploaded_file($_FILES["Hinh4"]["tmp_name"], $target_file);
        if ($status_upload) { // nếu upload file không có lỗi 
            $Hinh4 =  "" . basename($_FILES["Hinh4"]["name"]);
        }

        $data_img = array(
            'MaSP' => $_POST['MaSP'],
            'Hinh1' => $Hinh1,
            'Hinh2' => $Hinh2,
            'Hinh3' => $Hinh3,
            'Hinh4' => $Hinh4,
        );
        foreach ($data_img as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data_img[$key] = $value;
            }
        }
        $this->sanpham_model->create_img($data_img);
    }
    public function delete() {
        $id = $_GET['id'];
        // $this->sanpham_model->delete($id);

        if (isset($id)) {
            $this->sanpham_model->delete_img($id);
			$this->sanpham_model->delete($id);
		}
    }
    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        // $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        // $data_dm = $this->sanpham_model->danhmuc();
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
    }
    public function update() {
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaSP' => $_POST['MaSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'SoLuong' => $_POST['SoLuong'],
            'GiaBan' => $_POST['GiaBan'],
            'MaLoai' =>    $_POST['MaLoai'],
            'TrangThai' => 1,
            'ThoiGian' => $ThoiGian,
            'MoTa1' =>  $_POST['MoTa1'],
            'MoTa2' =>  $_POST['MoTa2'],
            'MoTa3' =>  $_POST['MoTa3'],
            'MoTa4' =>  $_POST['MoTa4'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->sanpham_model->update($data);
    }
}
