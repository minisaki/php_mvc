<?php
    function createSelectBox ($data, $keyselect){
        $arr ='';
        foreach($data as $key=>$value){
            $select = $keyselect == $value['id'] ? "selected" : "";
            // print_r($value['id']);
            // print_r("<p>".$value['name']."</p>");
            $arr .= "<option value='".$value['id']."'>".$value['name']."</option>";
        }
        return $arr;
        
    }
?>