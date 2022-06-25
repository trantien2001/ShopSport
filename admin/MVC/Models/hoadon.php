<?php
require_once("model.php");
class Hoadon extends Model
{
    var $table = "hoadon";
    var $contens = "MaDH";
    function ALL(){
        $query = "SELECT MaDH, kh.TenKh, kh.SDT, dh.NgayTao, dh.TongTien, kh.DiaChi, dh.TrangThai from hoadon as dh, khachhang as kh where kh.MaKH=dh.MaKH ORDER BY NgayTao DESC";
        require("result.php");
        return $data;
    }

    function trangthai($id){
        $query = "SELECT MaDH, kh.TenKh, kh.SDT, dh.NgayTao, dh.TongTien, kh.DiaChi, dh.TrangThai from hoadon as dh, khachhang as kh where kh.MaKH=dh.MaKH and TrangThai = $id";
        require("result.php");
        return $data;
    }
    function chitiethoadon($id){
        $query = "SELECT hd.TrangThai, ct.*, s.TenSP, s.GiaBan from chitietdonhang as ct, sanpham as s, hoadon as hd where ct.MaSP = s.MaSP and ct.MaDH = $id and hd.MaDH=ct.MaDH";
        require("result.php");        
        return $data;
    }
}