<?php
require_once("model.php");
class Cart extends Model {
    function detail_sp($id) {
        $query =  "SELECT * from sanpham AS sp, hinhanh AS img WHERE sp.MaSP=img.MaSP AND sp.MaSP = $id ";
        $result = $this->con->query($query);
        return $result->fetch_assoc();
    }
}