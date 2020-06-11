<?php
    session_start();
     echo '<pre>';

        print_r($_POST['order']);

     echo '</pre>';

     $data = file_get_contents('data/post.txt');
     $arrList = explode("\n", $data);

     foreach($_POST['order'] as $id=> $order){

        foreach($arrList as $key => $value){
            $arrItem = explode("|", $value);
            if($id == $arrItem[0]){
                $title = $arrItem[1];
                $mota = $arrItem[2];
                $thutu = $order;
                $str =$id . "|" . $title . "|" . $mota . "|" . $thutu;
                $arrList[$key] = $str;
            }
        }    
     }
    $strData = implode("\n", $arrList);
    $_SESSION["message"] = 'đã cập nhật số thứ tự thành công';
    file_put_contents("data/post.txt", $strData);
    header("location: indexl.php");
?>