<?php
require_once("model.php");
class Home extends Model {
    function sp_moinhat(){
        $query = "SELECT * FROM sanpham AS sp, hinhanh AS ha WHERE sp.MaSP=ha.MaSP ORDER BY NgayDang DESC LIMIT 0 , 10";
        require("result.php");
        return $data;
    }
    function sp_banchay(){
        $query = "SELECT * FROM chitietdonhang AS ct, sanpham AS sp, hinhanh AS ha 
            WHERE ct.MaSP=sp.MaSP AND sp.MaSP=ha.MaSP GROUP BY ct.MaSP LIMIT 0, 10";
        require("result.php");
        return $data;
    }
}