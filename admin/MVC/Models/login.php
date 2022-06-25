<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function tk_sanpham($id){
        $query = "SELECT count(MaSP) as Count FROM sanpham WHERE MaLoai = $id";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_thongbao(){
        $query = "SELECT count(MaDH) as Count FROM hoadon WHERE TrangThai = 0";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtthang($m){
        $query = "SELECT SUM(TongTien) as Count FROM hoadon WHERE MONTH(NgayTao) = $m And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtnam($y){
        $query = "SELECT SUM(TongTien) as Count FROM hoadon WHERE YEAR(NgayTao) = $y And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_khachhang(){
        $query = "SELECT count(MaKH) as Count FROM khachhang";
        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_nhanvien(){
        $query = "SELECT count(MaNV) as Count FROM nhanvien";
        return $this->conn->query($query)->fetch_assoc();
    }
}
