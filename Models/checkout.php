<?php
require_once("model.php");
class Checkout extends Model {
  function update_id_px($makh, $dc, $id_px){
    $query = "UPDATE khachhang SET idPX = $id_px, DiaChi = '".$dc."' WHERE MaKH = $makh";
    $status = $this->con->query($query);
  }
  function save($data){
    $f = "";
    $v = "";
    foreach ($data as $key => $value) {
        $f .= $key . ",";
        $v .= "'" . $value . "',";
    }
    $f = trim($f, ",");
    $v = trim($v, ",");
    $query = "INSERT INTO hoadon($f) VALUES ($v);";
    $status = $this->con->query($query);

    $query_madh = "select MaDH from hoadon ORDER BY NgayTao DESC LIMIT 1";
    $data_madh = $this->con->query($query_madh)->fetch_assoc();

    foreach ($_SESSION['sanpham'] as $value) {
        $MaDH = $data_madh['MaDH'];
        $MaSP = $value['MaSP'];
        $SoLuong = $value['SoLuong'];
        $query_ct = "INSERT INTO chitietdonhang(MaDH,MaSP,SoLgDat) VALUES ($MaDH,$MaSP,$SoLuong)";

        $status_ct = $this->con->query($query_ct);
    }
    
    if ($status == true and $status_ct = true) {
        setcookie('msg', 'Đăng ký thành công', time() + 2);
        header('location: ?act=checkout&xuli=order_complete');
    } else {
        setcookie('msg', 'Đăng ký không thành công', time() + 2);
        header('location: ?act=checkout');
    }
  }
  function data_tt(){
    $query = "SELECT * FROM province ORDER BY _name";
    require("result.php");
    return $data;
  }
  function data_name_tt($id){
    $query = "SELECT _name FROM province WHERE id = $id";
    $result = $this->con->query($query);
    return $result->fetch_assoc();
  }

  function data_name_qh($id){
    $query = "SELECT _name FROM district WHERE id = $id ";
    $result = $this->con->query($query);
    return $result->fetch_assoc();
  }

  function data_name_px($id){
    $query = "SELECT _name FROM ward WHERE id = $id ";
    $result = $this->con->query($query);
    return $result->fetch_assoc();
  }
}
?>