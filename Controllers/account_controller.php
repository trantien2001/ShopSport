<?php
require_once("Models/account.php");
class AccountController {
    var $account_model;
    public function __construct() {
        $this->account_model = new Account();
    }
    function list(){
        if (isset($_SESSION['login'])) {
            $matk = $_SESSION['login']['MaTK'];
            $data_kh = $this->account_model->data_kh($matk);
          
            $makh = $data_kh['MaKH'];
            
            $id_px = $this->account_model->get_id_px($makh);
            if($id_px['idPX'] != 0){
                $data_dc = $this->account_model->get_diachi($id_px['idPX']);
            }

            require_once('Views/index.php');
        } else {
            header('location: ?act=login');
        }
    }
    function edit(){
        if (isset($_SESSION['login'])) {
            $matk = $_SESSION['login']['MaTK'];
            $data_kh = $this->account_model->data_kh($matk);
          
            $makh = $data_kh['MaKH'];
            
            $id_px = $this->account_model->get_id_px($makh);
            if($id_px['idPX'] != 0){
                $data_dc = $this->account_model->get_diachi($id_px['idPX']);
            }

            require_once('Views/index.php');
        } else {
            header('location: ?act=login');
        }
    }
}   