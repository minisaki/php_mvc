<?php
class ConMeo{
    public $color ;
    public $age;

    public function __construct($color, $age){ // hàm dựng có đối số ($a), khi khởi tạo cũng phải truyền đối số
        echo '<h1>Con mèo màu '.$color.'</h1>';
        echo '<h1>'.$age.'</h1>';
    }
   
    public function inThongTin(){
        echo 'Hello function';
        echo '<h1>Con mèo màu '.$this->color.'</h1>';
        echo '<h1>'.$this->age.'</h1>';
    }
}

$objMeo1 = new ConMeo('đen', 1);

$objMeo2 = new ConMeo('vàng', 2);

?>