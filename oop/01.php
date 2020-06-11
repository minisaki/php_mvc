<?php
class ConMeo{
    public $color = 'balck';
    public $age = 1;

    public function __construct(){ // hàm dựng có đối số ($a), khi khởi tạo cũng phải truyền đối số
        echo '<h1>lam gì đó</h1>';
    }
   
    public function inThongTin(){
        echo 'Hello function';
        echo '<h1>Con mèo màu '.$this->color.'</h1>';
        echo '<h1>'.$this->age.'</h1>';
    }
}

$objMeo1 = new ConMeo(); // $a = xin chào
$objMeo1->color = 'yelow';
$objMeo1->age = 1;
$objMeo2 = new ConMeo();
$objMeo2->color = 'blue';
$objMeo3->age = 2;
// echo '<h1>'.$objMeo1->color.'</h1>';
// echo '<h1>'.$objMeo1->age.'</h1>';

// echo '<pre>';
// print_r($objMeo1->color); // in mảng, và đối tượng
// echo '</pre>';
// $objMeo1->inThongTin();

$objMeo1->inThongTin
?>