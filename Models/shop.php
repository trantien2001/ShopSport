<?php
require_once("model.php");
class Shop extends Model {
    function loaisp($a,$b) {
        $query = "SELECT * FROM loaisanpham WHERE   MaDM = 1 LIMIT $a, $b";
        require("result.php");
        return $data;
    }
    function keywork($a) {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM sanpham WHERE  TenSP LIKE $a LIMIT 0,9";
        require("result.php");
        return $data;
    }
    function dongia($a,$b) {
        if($a == 0){
            $a = "30000";
        }else{
            $a = $a."000000";
        }
        $b = $b."000000";
        $query = "SELECT * FROM sanpham WHERE  GiaBan > $a AND GiaBan < $b  LIMIT 0, 9";
        require("result.php");
        return $data;
    }

    function chitiet_loai($loai,$sp) {
        $query = "SELECT * FROM loaisanpham WHERE  TenLSP = '$loai' and MaDM = $sp";
        require("result.php");
        return $data;
    }
    function chitiet($id,$sp) {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = '$id' and MaDM = $sp";
        require("result.php");
        return $data;
    }
    function sanpham_noibat() {
        $query = "SELECT * FROM sanpham WHERE MaSP = (SELECT MaSP sp FROM chitietdonhang GROUP BY MaSP ORDER BY COUNT(MaSP) DESC LIMIT 1)";
        return $this->con->query($query)->fetch_assoc();
    }
    function count_sp() {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham";
        return $this->con->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm) {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm";
        return $this->con->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm,$ctdm) {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm And MaLSP = $ctdm";
        return $this->con->query($query)->fetch_assoc();
    }
}

?>