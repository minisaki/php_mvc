<?php
// $menu = array(); 

$menu_2 = [5,10,'nguyễn','vy']; // khai báo mảng rỗng
$a = ['key' => 'value', 5 => '10', 
        6 => 'phong',
        10 => '3.5'];
echo '<pre>';
print_r($a);
echo '</pre>';
$b = [
    'ho' => 'nguyên',
    'tên' => 'thanh',
];
echo '<pre>';
print_r($b);
echo '</pre>';
echo $a[6];
echo $b['tên'];


$menu = [
    'Quần',
    'Áo',
    'Giầy',
    'Dép',
    'Túi Xách'
];

echo '<pre>';
print_r($menu);
echo '</pre>';

echo $menu[0];
$count = count($menu);
for ($i=0; $i <= $count; $i++){
    echo '<p>'.$menu[$i].'</p>';
};
?>