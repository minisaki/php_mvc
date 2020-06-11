<?php
    function showMessage(){
        echo '<div class="danger"> bạn muốn xóa </div>';
    }
    function showMessage2($dong){
        echo '<div class="danger"> bạn muốn xóa dòng '.$dong.' </div>';
    }
    function showMessage3($dong=3){
        echo '<div class="danger"> bạn muốn xóa dòng '.$dong.' </div>';
    } //$dong=3 khi k chuyển tham số vào sẽ ra mặc định 3
    
    function tinhtong($a, $b) {
        $tong = $a + $b;
        return $tong;
    }
    
    function tinhtong2() {
        global $a, $b
        $tong = $a + $b;
        return $tong;
    // showMessage3();
    $tong = tinhtong(2,4);
    echo 'tong 2 so a và b: '.$tong.'<br>';

    $a = 3;
    $b = 5;
    $tong = tinhtong($a, $b);
    echo 'Biến a: '.$a.'<br>';
    echo 'Biến a: '.$b.'<br>';
    echo 'Biến a: '.$tong.'<br>';
    // global sử dụng biến toàn cục cho 1 function
?>