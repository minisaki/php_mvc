<?php
    require "db.php";

    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASSWORD", '');
    define("DB_NAME", 'hanghoa');

    $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $data = [
        'name' => 'Áo khoác 12345',
        'description' => 'mô tả Áo khoác 12345'
    ];

   /* $id = $db->insert($data, 'category');
    print_r('<h1>'.$id.'</h1>');*/
    // $ids = ['9', '11'];

    // $db->update($data, 14, 'category');

    $sql[] = "SELECT * ";
    $sql[] = "FROM `category` ";
    $sql[] = "WHERE `id` >= 13";
    $sql[] = " ORDER BY `id` DESC ";
    $sql = implode(" ", $sql);
    $row = $db->fetch_option($sql);
    echo '<pre>';
    print_r ($row);
    echo '</pre>';
?>