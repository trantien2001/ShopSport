<?php
    require_once('Models/search.php');
    class SearchController{
        var $search_model;
        public function __construct(){
            $this->search_model = new Search();
        }
        function list() {
            
        }
    }
?>