<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mô phỏng máy tính</title>
    
</head>
<body>
<?php
    $so1 = '';
    $so2 = '';
    $pheptoan = '';    
    $result = "";
    if ($so1 != "" && $so2 != "" && $pheptoan != "") {
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $pheptoan = $_POST['pheptoan'];
        switch ($pheptoan) {
            case '+':
                $result = $so1 + $so2;
                break;
            case '-':
                $result = $so1 - $so2;
                break;
            case '*':
                $result = $so1 * $so2;
                break;
            case '/':
                $result = $so1 / $so2;
                break;        
            default:
                $result = 'KHONG CO PHEP TOAN DUOC THUC HIEN';
                break;
        }
    }
    
?>
<div class="maytinh">
    <h1>máy tính đơn giản</h1>
    <form action="#" method="POST">
    <p>
        <span>số 1: <input type="text" name = 'so1' value=<?php echo $so1 ?>>
        </span> 
    </p>
    <p>
        <span>phép toán: <input type="text" name = 'pheptoan' value=<?php echo $pheptoan ?>></span> 
    </p>
    <p>
        <span>số 2: <input type="text" name = 'so2' value=<?php echo $so2 ?>>
        </span> 
    </p>
    <p>
        <span><input type="submit" value='kết quả'></span> 
    </p>
    <?php //if ($result != "") {   
    ?> 
    <!-- <P>kết quả: <?php //echo $so1 . $pheptoan .$so2 ." = " . $result?>
    </P> -->
    <?php //}?>
    <?php
    if ($result != ""){
        echo "<P>kết quả:".$so1.$pheptoan.$so2." = " . $result."</P>";
    } 
    ?>
</div>
</body>
</html>