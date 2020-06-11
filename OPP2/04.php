<?php
    require "class.php";
    $objConMeo1 = new conMeo("xam", 2);
    $objConMeo2 = new conMeo("xam", 8);
    $objConMeo3 = new conMeo("xam", 4);

    echo "<h1>" . conMeo::$dem . "</h1>";

    // $objConMeo1 = new conMeo("xam", 2);

    // echo $objConMeo1->show();

    // $objConMeo1->inthongtin();

    // echo "<h1>" . conMeo::show() . "</h1>";
?>