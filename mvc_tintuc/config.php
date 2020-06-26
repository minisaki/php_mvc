<?php
/** Dinh nghia duong dan tuyet doi cho HTML */

define("PATH_ROOT", dirname(__FILE__));
define("PATH_PUBLIC", PATH_ROOT . "/public/");
define("PATH_LIB",PATH_ROOT . 'lib/');
define("PATH_APP", PATH_ROOT. 'app/');
define("PATH_TEMPLATE", PATH_PUBLIC . 'template/');
define("PATH_UPLOAD", PATH_PUBLIC . 'upload/');

/** Dinh nghia duong dan tuong doi */

define("DIR_ROOT", "/php_beginer/mvc_tintuc/");
define("DIR_PUBLIC", DIR_ROOT . 'public/');
define("DIR_LIB",DIR_ROOT . 'lib/');
define("DIR_APP", DIR_ROOT. 'app/');
define("DIR_TEMPLATE", DIR_PUBLIC . 'template/');
define("DIR_UPLOAD", DIR_PUBLIC . 'upload/');

/*định nghĩa các thông số database*/ 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hanghoa");


$resizeImage  = [
    'category' => [
        'standard' => ['width'=> 300, 'height'=> 300],
        'thumb' => ['width'=> 100, 'height'=> 100]
    ],
    'new' => [
        'standard' => ['width'=> 300, 'height'=> 300],
        'thumb' => ['width'=> 100, 'height'=> 100]

    ]
]

?>