<?php
    session_start();
    require 'lib/function.php';
    $title = "";
    $mota = "";
    $thutu = "";
    $data = file_get_contents('data/post.txt');
    $arrList = explode("\n", $data);
    $keyEdit = "";
    $id = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        foreach($arrList as $key => $value){
            $arrItem = explode("|", $value);
            if($id == $arrItem[0]){
                // $current = $arrList[$key];
                // print_r($current);
                $title = $arrItem[1];
                $mota = $arrItem[2];
                $thutu = $arrItem[3];
                $keyEdit = $key;
                break;
            }
        }
    }
    if(isset($_POST['title'])&& isset($_POST['mota'])){
        // print_r ($_POST);        
        $title = $_POST['title'];
        $mota = $_POST['mota'];
        $thutu = $_POST['sott'];
        if (!empty($keyEdit)){
            //Edit
            $strEdit = $id . "|" . $title ."|" . $mota . "|" . $thutu;
            $arrList[$keyEdit] = $strEdit;
            $strData = implode("\n", $arrList);
            file_put_contents("data/post.txt", $strData);
            $_SESSION["message"] = 'đã cập nhật thành công';
        }else{
            //add
            if(!empty($data)){
                $arrLastItem = get_last_item($arrList);
                $lastId = $arrLastItem[0];
                $id = $lastId + 1 ;
                $str = "\n" . $id . "|" . $title . "|" . $mota . "|" . $thutu;
            }else{
                $id = 1;
                $str = $id . "|" . $title . "|" . $mota . "|" . $thutu;
            }        
            $_SESSION["message"] = 'đã cập nhật thành công';
            // die($str);
            file_put_contents('data/post.txt', $str, FILE_APPEND);
        }
        if(isset($_POST['luu2'])){
            header("location: indexl.php");
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <div class="list">
            <h1>Danh sach bai viet</h1>
            <div class="btn-active">
                <a class ='btn-add' href="indexl.php">Danh sach</a>
            </div>
           <form action="#" method="POST">
               <div class="group-control">
                   <label for="title">Tieu de</label>
                   <input name='title' type="text" value ="<?php echo $title?>">
               </div>
               <div class="group-control">
                   <label for="title">mo ta</label>
                   <textarea name="mota" id="" cols="30" rows="10"><?php echo $mota?></textarea>
               </div>
               <div class="group-control">
                   <label for="title">số thứ tự</label>
                   <input name='sott' type="text" value ="<?php echo $thutu?>">
               </div>
               <div class="group-control text-center">
                   <input class='btn-submit' type="submit" value='luu'>
               </div>
               <div class="group-control text-center">
                   <input name = "luu2"class='btn-submit' type="submit" value='luu va dong'>
               </div>
           </form>
        </div>
    </div>
</body>
</html>
<script stype='text/javascript'>
    $('#checkAll').click(function(){
        var check = $(this).prop('checked');
        $('.checkBox').prop('checked', check);
    });
</script>