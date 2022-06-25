<?php
require_once("Models/checkout.php");
class CheckoutController {
    var $checkout_model;
    public function __construct() {
        $this->checkout_model = new Checkout();
    }
    
    function list() {
        if (isset($_SESSION['login'])) {
            $matk = $_SESSION['login']['MaTK'];            
            $data_kh = $this->checkout_model->data_kh($matk);
            $data_tt = $this->checkout_model->data_tt();

            $matk = $_SESSION['login']['MaTK'];
            $data_kh = $this->checkout_model->data_kh($matk);
            $makh = $data_kh['MaKH'];

            $id_px = $this->checkout_model->get_id_px($makh);
            if($id_px['idPX'] != 0){
                $data_dc = $this->checkout_model->get_diachi($id_px['idPX']);
            }
            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('Views/index.php');
        } else {
            header('location: ?act=login');
        }
    }
    function  save() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $NgayTao = date('Y-m-d H:i:s');
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }

        $matk = $_SESSION['login']['MaTK'];
        $data_kh = $this->checkout_model->data_kh($matk);
        foreach($data_kh as $kh){
            $makh = $kh['MaKH'];
        }
        $id_tt = $_POST['province'];
        $id_qh = $_POST['district'];
        $id_px = $_POST['ward'];
        $tt = $this->checkout_model->data_name_tt($id_tt); 
        $qh = $this->checkout_model->data_name_qh($id_qh);
        $px = $this->checkout_model->data_name_px($id_px);
        $dc = $_POST['DiaChi'];
        $data = array(
            'MaKH' => $makh,
            'MaNV' => 1,
            'NgayTao' => $NgayTao,
            'DiaChiGiao' => $dc.' - '.$px['_name'].' - '.
                            $qh['_name'].' - '.$tt['_name'],
            'NgayGiao' => null,
            'NgayThanhToan' => null,
            'TongTien' => $count,
            'TrangThai'  =>  '0',
        );
        $this->checkout_model->update_id_px($makh, $dc, $id_px);
        $this->checkout_model->save($data);
        unset($_SESSION['sanpham']);
    }
    function order_complete() {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }
}
