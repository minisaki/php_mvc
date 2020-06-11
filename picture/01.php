<?php
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    if(isset($_FILES['picture'])){
        $arr_picture = $_FILES['picture'];
        foreach($arr_picture['name'] as $key => $picture_name){
        
        $dir_file = 'pictures/';

        // $arr_picture = $_FILES['picture'];
        // $size = $arr_picture['size'][$key];

        $ext = pathinfo($picture_name, PATHINFO_EXTENSION);
        $name = pathinfo($picture_name, PATHINFO_BASENAME);
        $newName = $name . '-' . time(). ".". $ext;
       

        // $ext_accepted =['jpg', 'png'];
        // if(!in_array($ext, $ext_accepted)){
        //     die('dinh dang hinh anh k hop le!');
        // }
        // if ($size > 500000){
        //     die ('dung luong qua lon');
        // }
        move_uploaded_file($arr_picture['tmp_name'], $dir_file . $newName);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id = 'frmUpload' action="#" method='POST' enctype = 'multipart/form-data'>
    <div class="uplaod">
    <input type="file" name ='picture[]' multiple>
    </div>
    <div class="uplaod">
    <input type="submit" value = 'upload'>
    </div>
    
    
    </form>
</body>
</html>