<?php
    require_once('model.php');
    class Detail extends Model {
        function product_detail($id) {
            $query = "SELECT * FROM sanpham WHERE MaSP = $id";
            $result = $this->$con->query($query);
            return $result->fetch_assoc();
        }
    }
?>