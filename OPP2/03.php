<?php

    require 'class.php';

    $objConMeo1 = new conMeo("xanh", 2);

    // echo "<h1>Màu : ".$objConMeo1->maulong."</h1>";

    // echo "<h1>Màu : ".$objConMeo1->inthongtin()."</h1>";

    $objConMeo1->setmauLong('fsjghfs');

    echo "<h1>Màu : ".$objConMeo1->getMauLong()."</h1>";

?>