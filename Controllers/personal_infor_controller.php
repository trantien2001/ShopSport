<?php
    require_once('Models/personal_information.php');
    class PersonalInforController {
        var $personal_infor_model;
        public function __construct() {
            $this->personal_infor_model = new PersonalInformation();
        }
        function personal_khachhang() {
            $data_khachhang = $this->perpersonal_infor_model->Infor_khachhang();
            require_once('Views/index.php');
        }
    }
?>