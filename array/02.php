<?php

    $category = [
        'id' => 12,
        'name' => 'túi xách',
        'link' => 'google.com',
        'picture' => 'tuixach.jpg'
    ];

    $category["status"] = "kích hoạt";
    $category["name"] = "balo";

    foreach($category as $myKey => $myValue){
        echo "<p>key: $myKey - Giá trị: $myValue</p>";
    }
?> 