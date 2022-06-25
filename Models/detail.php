<?php
    require_once("model.php");
    class Detail extends Model{
        function detail_sp($id) {
            $query =  "SELECT * FROM sanpham AS sp, hinhanh AS img WHERE sp.MaSP=img.MaSP AND sp.MaSP = $id ";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        function sp_cungloai($maloai){
            $query = "SELECT * FROM sanpham AS sp, hinhanh AS img WHERE sp.MaSP=img.MaSP AND sp.MaLoai = $maloai";
            require("result.php");
            return $data;
        }
        function danhgia($masp){
            $query = "SELECT * FROM khachhang AS kh, danhgia AS dg WHERE kh.MaKH=dg.MaKH AND dg.MaSP=$masp";
            require("result.php");
            return $data;
        }
        function count_dg($masp){
            $query = "SELECT COUNT(dg.MaKH) as sum FROM khachhang AS kh, danhgia AS dg WHERE kh.MaKH=dg.MaKH AND dg.MaSP=$masp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }

        function ao_nguoilon($masp) {
            $query = "SELECT * FROM sanpham AS sp, adult_sport_shirt_size AS anl WHERE sp.MaSP=anl.MaSP AND sp.MaSP=$masp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        function ao_treem($masp) {
            $query = "SELECT * FROM sanpham AS sp, kids_sports_shirt_size AS ate WHERE sp.MaSP=ate.MaSP AND sp.MaSP=$masp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        function giay_nguoilon($masp) {
            $query = "SELECT * FROM sanpham AS sp, adult_shoe_size AS gnl WHERE sp.MaSP=gnl.MaSP AND sp.MaSP=$masp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        function giay_treem($masp) {
            $query = "SELECT * FROM sanpham AS sp, children's_shoe_size AS gte WHERE sp.MaSP=gte.MaSP AND sp.MaSP=$masp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
    }
?>
