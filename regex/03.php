<?php
$page = file_get_contents("https://vnexpress.net/");
$input = $page;
// print $input;
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