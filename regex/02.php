<?php
$input = '<img     src="cat.jpg"><span> Hinh con mao</span><img src="dog.jpg"><div class="box></div>';
$pattern = '#<img[^>]+src="([^"]+)">#';
if(preg_match_all($pattern, $input, $match)){
    echo 'có tồn tại';
    echo '<pre>';
    print_r($match);
    echo '</pre>';
}else{
    echo 'không tồn tại';
}


?>
<!-- preg_match_all lấy hết kết quả, ra mảng 2 chiều
phần tử 0: ra mảng hợp lệ
phần tử 1: ra cái group(h)

-->