<?php
    class Post extends Model{

        public function __construct(){
            parent::__construct();
            $this->table = "post";
            // echo __FILE__;
        }

    }
?>