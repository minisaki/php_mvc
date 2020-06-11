<?php
    class DongVat{
        //protected bên trong class truy cập đc và những thằng con truy cập được
        protected $soChan;
        protected $ten;
        protected $tuoi;


        public function __construct($ten, $tuoi, $soChan){
            $this->ten = $ten;
            $this->sochandem = $soChan;
            $this->tuoi = $tuoi;
        }

        public function show(){
            echo "<h1>Số chân : ".$this->sochandem."</h1>";
            echo "<h1>Tuổi : ".$this->tuoi."</h1>";

            echo "<h1>tên : ".$this->ten."</h1>";
        }
    };
?>