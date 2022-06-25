<?php
    require_once('Models/home.php');
    class HomeController {
        var $home_model;
        public function __construct() {
            $this->home_model = new Home();
        }
        function list() {
            $data_sum_sp = $this->home_model->sum_sp();
            $b = 30;
            $id = isset($_GET['trang']) ? $_GET['trang'] : 1;
            $a = ($id - 1) * $b;
            // $data_sanpham = $this->home_model->limit($a, $b);
            $data_danhmuc = $this->home_model->danhmuc();
            $data_loaisanpham = $this->home_model->loaisanpham();
            $data_banner = $this->home_model->banner();
            $data_sum_banner = $this->home_model->sum_banner();
            $data_sp_moinhat = $this->home_model->sp_moinhat();
            $data_sp_banchay = $this->home_model->sp_banchay();
            
            require_once('Views/index.php');
        }
    }
?>