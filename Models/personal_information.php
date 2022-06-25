<?php
    require_once('model.php');
    class PersonalInformation extends Model {
        var $con;
        function __construct() {
            $con_obj = new connect();
            $this->con = $con_obj->con;
        }

        function Infor_khachhang($id) {
            $query = "SELECT TenKh, SDT, DiaChi, Email, GioiTinh FROM taikhoan AS tk, khachhang AS kh WHERE tk.MaTK=kh.MaTK AND tk.MaTK = $id";
            return $this->con->query($query)->fetch_assoc();
        }

        function Infor_shipper($id) {
            $query = "SELECT TenKh, SDT, Email, GioiTinh FROM taikhoan AS tk, nhanvien AS nv WHERE tk.MaTK=nv.MaTK AND tk.MaTK = $id";
            return $this->con->query($query)->fetch_assoc();
        }
    }
?>