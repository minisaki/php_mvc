<?php
    session_start();
    $id = $_GET['id'];

    $data = file_get_contents('data/post.txt');
    $arrList = explode("\n", $data);

    $keyDelete = "";
    foreach($arrList as $key => $value){
        $arrItem = explode("|", $value);
        if($id == $arrItem[0]){            
            $keyDelete = $key;
            break;
        }
    }    
    unset($arrList[$keyDelete]);
    $strData = implode("\n", $arrList);
    $_SESSION["message"] = 'đã xóa thành công';
    file_put_contents("data/post.txt", $strData);
    header("location: indexl.php");
?>