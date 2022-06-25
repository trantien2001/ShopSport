<?php
require_once("MVC/Models/taikhoan.php");
class TaiKhoanController {
    var $taikhoan_model;
    public function __construct() {
        $this->taikhoan_model = new taikhoan();
    }
    public function list() {
        $data = $this->taikhoan_model->All();
        require_once("MVC/Views/Admin/index.php");
    }
    public function detail() {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->taikhoan_model->find($id);
        require_once("MVC/Views/Admin/index.php");
    }
    public function add() {
        require_once("MVC/Views/Admin/index.php");
    }
    public function store() {
        $data = array(
            'TaiKhoan' =>    $_POST['TaiKhoan'],
            'MatKhau' => md5($_POST['MatKhau']),
            'MaPQ' =>  $_POST['MaPQ'],
            'TrangThai'  =>  $_POST['TrangThai']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->taikhoan_model->store($data);
    }
    public function delete() {
        $id = $_GET['id'];
        $this->taikhoan_model->delete($id);
    }
    public function edit() {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->taikhoan_model->find($id);
        require_once("MVC/Views/Admin/index.php");
    }
    public function update() {
        $data = array(
            'MaTK' => $_POST['MaTK'],
            'TaiKhoan' =>    $_POST['TaiKhoan'],
            'MatKhau' => md5($_POST['MatKhau']),
            'MaPQ' =>  $_POST['MaPQ'],
            'TrangThai'  =>  $_POST['TrangThai'],
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->taikhoan_model->update($data);
    }
}
