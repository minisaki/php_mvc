<?php
    //isset ktra 1 biến có tồn tại hay k?
    // echo $a = isset($_GET['a']) ? $_GET['a'] : 0;
    // echo $b = isset($_GET['b']) ? $_GET['b'] : 0;
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo $tong = $a + $b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="03.php" method="GET">
    <h3>CT mô phỏng máy tính</h3>
        <p>
            Số a: <input type="text" name="a" value=<?php echo $a ?>>
        </p>
        <p>
            Số b: <input type="text" name="b" value=<?php echo $b ?>>
        </p>
        <p>
            <input type="submit" value="Gửi">
        </p>
    </form>
    <p>tổng <?php echo $a ?> + <?php echo $b ?>: <?php echo $tong ?></p>
</body>
</html>