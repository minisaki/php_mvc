<?php
/*
đường dẫn tuyệt đối: đi từ gốc rể đi vào, thg để dùng trong include, reqruire, load tập tin php
đường dẫn tương đối: được xác định phụ thuộc vào thư mục hiện hành, sử dụng ../ để nhảy qua thư mục khác
*/
    $dirTuongDoi = './include/file1.txt';
    $dirTuyetDoi = 'C:\xampp\htdocs\php_beginer\file\include\file1.txt';


    echo basename($dirTuyetDoi, '.txt'); //lấy tên file
    echo '<br>';

    echo dirname($dirTuyetDoi); // lấy đường dẫn đến thư mục hoặc file
    echo '<br>';

    echo __FILE__; // lấy đường dẫn đến thư mục hiện tại
    echo '<br>';

    echo dirname(__FILE__); // kết hợp lấy đường dẫn
    echo '<br>';

    if(file_exists($dirTuyetDoi)){
        echo 'ton tai';
    }else{
        echo 'khong ton tai';
    }

    $root = dirname(__FILE__);
    $file1 = $root . "\include\\file1.txt";
    $filename = pathinfo($file1, PATHINFO_FILENAME);// trả về thông tin 1 dường dẫn kiểu array
    echo '<pre>';
    print_r($filename);


    // coppy file1 từ include đến sub
    /*$filecopy = $root . "\sub\\test.txt";
    copy($file1, $filecopy);*/


    
?>