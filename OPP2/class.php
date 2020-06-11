<?php

    class conMeo{
        /**
         * 1. thuộc tính (biến lưu trữ)
         * 2. Phương thức, function, method
         * 3. public ngoià class cũng truy cập được
         * 4. private k gọi đc ngoài class
         */
        private $maulong = "nâu";  // thuộc đối tượng

        public $tuoi = 1;

        public static $dem = 0; // static thuộc về lớp k thuộc về đối tượng

        public function __construct($maulong, $tuoi){
            echo "<h1>hàm khởi tạo</h2>";
            $this->maulong = $maulong;
            $this->tuoi = $tuoi;
            self::$dem++;
            // echo "<h1>Màu : ".$this->maulong."</h1>";
            // echo "<h1>Tuổi : ".$this->tuoi."</h1>";

        }

        public function inthongtin(){
            echo "<h1>Màu : ".$this->maulong."</h1>";
            echo "<h1>Tuổi : ".$this->tuoi."</h1>";

            echo "<h1>số con mèo : ".self::$dem."</h1>";
        }

        function getMauLong(){
            return $this->maulong;
        }

        function setmauLong($maulong){
            $this->maulong = $maulong;
        }

        public static function show(){
            echo "show dữ liệu";
        }
        
    };

   

?>