<?php

    require 'class.php';

    $objConMeo1 = new conMeo();
    $objConMeo1->maulong = "xám";
    $objConMeo2 = new conMeo();

    echo "<h1> $objConMeo1->maulong </h1>";
    $objConMeo1->inthongtin();
    $objConMeo2->inthongtin();
    // echo '<pre>';
    // print_r ($objConMeo1);
    // echo '</pre>';

?>