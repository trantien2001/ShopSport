<script>
    const size = document.querySelector(".sizes.active>input")
    const sl = document.querySelector(".solgs.active>input")
    console.log(sl.value)
    console.log(size.value)
</script>
<?php
    require_once('Models/detail.php');
    class DetailController {
        var $detail_model;
        public function __construct() {
            $this->detail_model = new Detail();
        }
        
        function list() {
            $id = $_GET['id'];
            $data = $this->detail_model->detail_sp($id);
            
            $maloai = $data['MaLoai'];
            $data_sp_cungloai = $this->detail_model->sp_cungloai($maloai);

            $data_giay_nguoilon = $this->detail_model->giay_nguoilon($id);
            $data_ao_nguoilon = $this->detail_model->ao_nguoilon($id);
            $data_ao_treem = $this->detail_model->ao_treem($id);
            // $data_giay_treem = $this->detail_model->giay_treem($id);

            // $data_danhmuc = $this->detail_model->danhmuc();
            // $data_chitietDM = array();

            // for($i=1; $i <=count($data_danhmuc);$i++){
            //     $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
            // }
            
            // if($data!=null){
            //     $data_lq = $this->detail_model->sanpham_danhmuc(0,4,$data['MaLoai']);
            // }
            $data_dg = $this->detail_model->danhgia($id);
            $data_count_dg = $this->detail_model->count_dg($id);
            require_once('Views/index.php');
        }
    }
?>