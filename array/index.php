<?php
    require_once 'lib/function.php';

    $categorys = [
        ['id' => '202','name' => 'Balo'],
        ['id' => '203','name' => 'cup'],
        ['id' => '204','name' => 'quần'],
        ['id' => '205','name' => 'áo'],
        ['id' => '206','name' => 'mũ'],
    ];
    $keyselect = '205';
    $select_category = createSelectBox($categorys, $keyselect)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=fo, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <label for="cars">Choose a car:</label>

    <select id="cars">
        <?php echo $select_category?>
        <!-- <option value="1">Volvo</option>
        <option value="2">Saab</option>
        <option value="3">VW</option>
        <option value="4" selected>Audi</option> -->
        <select name="" id="">
        <p>
            <input type="submit" value = 'gửi'>
        </p>
        </select>
    </select>
</form>
</body>
</html>