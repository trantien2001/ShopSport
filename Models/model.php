<?php
    require_once('connect.php');
    class Model {
        var $con;
        function __construct() {
            $con_obj = new Connect();
            $this->con = $con_obj->con;
        }
        function list_promotion(){
            $query = "SELECT * FROM khuyenmai";
            require('result.php');
            return $data;
        }
        function danhmuc() {
            $query = "SELECT * FROM danhmuc";
            // $query = "SELECT * FROM danhmuc as dm, sanpham as sp, loaisanpham as lsp, hinhanh as ha 
            //     WHERE sp.MaSP=ha.MaSP and sp.MaLoai=lsp.MaLoai and dm.MaDM=lsp.MaDM and dm.MaDM=1";
            require('result.php');
            return $data;
        }
        function sp_dm($id_dm) {
            $query = "SELECT * FROM danhmuc as dm, sanpham as sp, loaisanpham as lsp, hinhanh as ha WHERE sp.MaSP=ha.MaSP and sp.MaLoai=lsp.MaLoai and dm.MaDM=lsp.MaDM and dm.MaDM=$id_dm";
            require('result.php');
            return $data;
        }
        function sp_lsp($id_lsp) {
            $query = "SELECT * FROM sanpham as sp, loaisanpham as lsp, hinhanh as ha WHERE sp.MaSP=ha.MaSP and sp.MaLoai=lsp.MaLoai and lsp.MaLoai=$id_lsp";
            require('result.php');
            return $data;
        }
        function ten_dm($id_dm) {
            $query = "SELECT TenDM FROM danhmuc WHERE MaDM = $id_dm";
            // require('result.php');
            // return $data;
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        function ten_lsp($id_lsp) {
            $query = "SELECT TenLoai FROM loaisanpham WHERE MaLoai = $id_lsp";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }

        function loaisanpham() {
            $query = "SELECT * FROM loaisanpham";
            require('result.php');
            return $data;
        }
        function sanpham() {
            $query = "SELECT * FROM sanpham as sp, hinhanh as img WHERE sp.MaSP = img.MaSP";
            require('result.php');
            return $data;
        }
        function chitietdanhmuc($id) {
            $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";
            require("result.php");
            return $data;
        }

        function chitietsanpham($id) {
            $query = "SELECT * FROM sanpham WHERE MaSP = $id";
            require_once('result.php');
            return $data;
        }

        function sum_tk() {
            $query = "SELECT COUNT(MaTK) as sum FROM taikhoan";
            require('result.php');
            return $data;
        }

        function limit($a, $b) {
            $query = "SELECT * FROM sanpham as sp, hinhanh as img WHERE sp.MaSP = img.MaSP AND TrangThai = 1 limit $a, $b";
            require('result.php');
            return $data;
        }
        function sum_sp() {
            $query = "SELECT COUNT(MaSP) as sum FROM sanpham";
            require('result.php');
            return $data;
        }
        function random($id) {
            $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
            require("result.php");
            return $data;
        }
        function banner() {
            $query =  "SELECT * FROM banner WHERE TrangThai = 1";
            require("result.php");            
            return $data;
        }
        function sum_banner() {
            $query = "SELECT COUNT(id) as sum FROM banner WHERE TrangThai = 1";
            require("result.php");
            return $data;
        }
        function sanpham_danhmuc($a, $b, $loaisp) {
            $query =   "SELECT * FROM sanpham WHERE TrangThai = 1  and MaLoai = $loaisp ORDER BY NgayDang DESC limit $a,$b";
            require("result.php");
            return $data;
        }

        function data_kh($matk){
            $query = "SELECT * FROM khachhang AS kh, taikhoan AS tk WHERE kh.MaTK=tk.MaTK AND tk.MaTK=$matk";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
        }
        
        function my_order($makh){
            $query = "SELECT * FROM hoadon WHERE MaKH = $makh";
            require("result.php");
            return $data;
        }
       
        function get_id_px($makh){
            $query = "SELECT idPX FROM khachhang WHERE MaKH = $makh";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
          }
          function get_diachi($id){
            $query = "SELECT px._name as px, px.id as id_px, qh._name as qh, qh.id as id_qh, tt._name as tt, tt.id as id_tt FROM province as tt, district as qh, ward as px WHERE px.id = $id and px._district_id=qh.id and qh._province_id=tt.id";
            $result = $this->con->query($query);
            return $result->fetch_assoc();
          }
    }
?>