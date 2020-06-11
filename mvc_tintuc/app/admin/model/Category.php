<?php
    class Category extends Model{

        public function __construct(){
            parent::__construct();
            $this->table = "category";
            // echo __FILE__;
        }

        public function saveItem($data){
            $this->insert($data);
        }

    }
?>