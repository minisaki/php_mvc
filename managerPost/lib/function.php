<?php
    function get_last_item($arr){
        $lenght = count($arr);
        $lastItem = $arr[$lenght - 1];
        $arrLastItem = explode("|", $lastItem);
        return $arrLastItem;
    }

?>