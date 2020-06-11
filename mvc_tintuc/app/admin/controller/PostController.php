<?php
    class PostController extends Controller{
        public function __construct( $request){ 
            parent::__construct($request);           

        }

        public function index(){
            print_r($this->model);
        }

    }
?>