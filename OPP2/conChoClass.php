<?php
    // require "classdongvat.php";
    /**class DongVat{
        //protected bên trong class truy cập đc và những thằng con truy cập được
        protected $soChan;
        protected $ten;
        protected $tuoi;


        public function __construct($ten, $tuoi, $soChan){
            $this->ten = $ten;
            $this->sochan = $soChan;
            $this->tuoi = $tuoi;
        }

        public function show(){
            echo "<h1>Số chân : ".$this->sochan."</h1>";
            echo "<h1>Tuổi : ".$this->tuoi."</h1>";

            echo "<h1>tên : ".$this->ten."</h1>";
        }
    };*/

    class conCho extends DongVat{
        /**
         * 1. thuộc tính (biến lưu trữ)
         * 2. Phương thức, function, method
         * 3. public ngoià class cũng truy cập được
         * 4. private k gọi đc ngoài class
         */
    //    $tiengkeu = "gâu gâu";
        public function __construct($ten, $tuoi, $soChan){
            parent::__construct($ten, $tuoi, $soChan);

            // $this->tiengkeu = "gâu gâu";
        }
        
        public function keu(){
            echo "chó sủa" . $this->tiengkeu;
        }

        public function inthongtin(){
            echo "<h1>Số chân : ".$this->soChan."</h1>";
            echo "<h1>tên : ".$this->ten."</h1>";
        }
        
    };

   

?>