<?php
class Controller{
    public function __construct($request){
        $this->request = $request;
        $this->setModel();
        $this->setView();
    }

    public function setModel(){
        $modelName = ucfirst($this->request['controller']);
        require 'app/'.$this->request['app']. '/model/' .$modelName.'.php';
            
        $this->model = new $modelName();
            
        // print_r($this->model);

    }

    public function setView(){
        $this->view = new View($this->request);

    }
}
?>