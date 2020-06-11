<?php
    // $data = file_get_contents('./data/data.txt'); // load đc cả html, page, link
    // echo $data;

    // require "source/process.php"; // nhúng file source

    define('ROOT_PATH', dirname(__FILE__));

    $root_path = dirname(__FILE__);
    $data_path = $root_path . '/data/';
    require "source/process.php";
    echo $root_path;
    echo '<br>';
    echo $data_path;
    echo '<br>';
    echo $data;
    echo '<br>';
?>