<?php
    require_once('Models/promotion.php');
    class PromotionController {
        var $promotion_model;
        public function __construct() {
            $this->promotion_model = new Promotion();
        }
        function list() {
            $data_list = $this->promotion_model->list_promotion();
            require_once('Views/index.php');
        }
    }
?>