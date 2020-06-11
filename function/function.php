<?php
function showItemfunction($leght=1){
    $html = '<ul class="menu">';
    for ($i = 0; $i < $leght; $i++){
        $html1 = "<li class='list'> chiều dài: ".$i.'</li>';
        
    };
    $html2 = "</ul>";
    // echo $html.$html_li.$html;
    return $html.$html1.$html2;
};


echo showItemfunction(5);
?>