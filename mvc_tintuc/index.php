<?php
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

// require 'lib/controller.php';
// require 'lib/model.php';
// require 'lib/loader.php';
require 'config.php';

function __autoload($class){
    require_once 'lib/'.$class.'.php';
}

$loader = new Loader();


?>