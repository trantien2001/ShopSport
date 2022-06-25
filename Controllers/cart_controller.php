<?php
    require_once('Models/cart.php');
    class CartController {
        var $cart_model;
        public function __construct() {
            $this->cart_model = new Cart();
        }
        function list_cart() {
            $data_category = $this->cart_model->danhmuc();
            $data_category_detail = array();
            for($i = 1; $i <= count($data_category); $i++) {
                $data_category_detail[$i] = $this->cart_model->chitietdanhmuc($i);
            }
            $count = 0;
            if(isset($_SESSION['sanpham'])) {
                foreach($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('Views/index.php');
        }

        function add_cart() {
            $id = $_GET['id'];


            $data = $this->cart_model->detail_sp($id);
            $count = 0;
            if (isset($_SESSION['sanpham'][$id])) {
                $arr = $_SESSION['sanpham'][$id];
                $arr['SoLuong'] = $arr['SoLuong'] + 1;
                $arr['ThanhTien'] = $arr['SoLuong'] * $arr["GiaBan"];
                $_SESSION['sanpham'][$id] = $arr;
            } else {
                $arr['MaSP'] = $data['MaSP'];
                $arr['TenSP'] = $data['TenSP'];
                $arr['GiaBan'] = $data['GiaBan'];
                $arr['SoLuong'] = 1;
                $arr['ThanhTien'] = $data['GiaBan'];
                $arr['Hinh1'] = $data['Hinh1'];
                $_SESSION['sanpham'][$id] = $arr;
            }
    
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
            header('Location:?act=cart#dxd');
        }

        function update_cart() {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] + 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["GiaBan"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
            header('Location: ?act=cart#dxd');
        }
        function delete_cart() {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            if ($arr['SoLuong'] == 1) {
                unset($_SESSION['sanpham'][$_GET['id']]);
            } else {
                $arr = $_SESSION['sanpham'][$_GET['id']];
                $arr['SoLuong'] = $arr['SoLuong'] - 1;
                $arr['ThanhTien'] = $arr['SoLuong'] * $arr["GiaBan"];
                $_SESSION['sanpham'][$_GET['id']] = $arr;
            }
            header('Location: ?act=cart#dxd');
        }
        function deleteall_cart() {
            unset($_SESSION['sanpham'][$_GET['id']]);
            header('Location: ?act=cart#dxd');
        }
    }
?>