<?php
    class Category extends Model{

        public function __construct(){
            parent::__construct();
            $this->table = "category";
            // echo __FILE__;
        }

        public function listItems($param){
            $query[] = "SELECT *";
            $query[] = "FROM `$this->table`";
            $query[] = "ORDER BY `id` DESC";
            $query = implode(" ", $query);
            $data = $this->fetch_records($query);
            return $data;
        }

        public function saveItem($param){
            // global $resizeImage;
            $data = $param['form'];
            $data['created_at'] = time();
            $data['updated_at'] = $data['created_at'];

            //upload
            $upload = new Upload($_FILES['picture']);
            $upload->setFolder('category');
            $data['picture'] = $upload->upload();
            $this->insert($data);
        }

    }
?>