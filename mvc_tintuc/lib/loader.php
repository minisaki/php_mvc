<?php
    class Loader{
        public function __construct(){

            $this->setRequest();
            // print_r($this->request); die(0);

            $this->app = $this->request['app'];

            $this->controller = $this->request['controller'];

            $this->action = $this->request['action'];

            $controller = $this->loaderController();

            $controller->{$this->action}();

        }

        public function loaderController(){

            $controllerName =  $this->controller . 'Controller';

            $path_controller = 'app/'.$this->app. '/controller/' .$controllerName.'.php';
            
            if (file_exists($path_controller)){
                require $path_controller;
                $controller = new $controllerName($this->request);
            }else {
                die("không tồn tại");
            }
            // require 'app/admin/controller/CategoryController.php';
            
            

            return  $controller;
            
            // print_r($controller);
        }

        public function setRequest(){
            $this->request = array_merge($_GET, $_POST);
        }
    }
?>