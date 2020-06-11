<?php
$input = '<div ib="box"><a href="google.com">link website</a></div>';
$pattern = "#href=\"([^\"]+)\"#";

if(preg_match($pattern, $input, $match)){
    echo 'có tồn tại';
    echo '<pre>';
    print_r($match);
    echo '</pre>';
}else{
    echo 'không tồn tại';
}
?>