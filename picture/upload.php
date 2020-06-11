<?php 
    if (isset($_FILES['picture'])){

        $dir_file = 'images/';

        $arr_picture = $_FILES['picture'];
        $size = $arr_picture['size'];
        // echo '<pre>';
        // print_r ($arr_picture);
        // echo '</pre>';

        // print_r ($arr_picture);
        $ext = pathinfo($arr_picture['name'], PATHINFO_EXTENSION);
        // echo $ext;
        $newName = time(). ".". $ext;
        // echo $newName;

        $ext_accepted =['jpg', 'png'];
        if(!in_array($ext, $ext_accepted)){
            die('dinh dang hinh anh k hop le!');
        }
        if ($size > 500000){
            die ('dung luong qua lon');
        }
        move_uploaded_file($arr_picture['tmp_name'], $dir_file . $newName);
    }
?>