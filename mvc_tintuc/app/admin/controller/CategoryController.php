<?php
    class CategoryController extends Controller{
        public function __construct($request){
            parent::__construct($request);
            $this->view->setlayout('admin/index');
            $this->folderview = 'category/';
            
        }

        public function index(){
            // $data = [
            //     'name' => 'test2',
            //     'description' => 'mo ta test 2'
            // ];
            
            // $this->model->saveItem($data);
            $this->view->render($this->folderview.'index');
        }

        public function form(){   

            $this->view->render($this->folderview.'form');
        }
        
        

    }
?>