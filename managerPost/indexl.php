<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <div class="list">
            <h1>Danh sach bai viet</h1>
            <div class="btn-active">
                <a class ='btn-add' href="./form.php">Them</a>
                <a class ='btn-delete-all' href="javascript:submitForm('frmSubmit', 'deleteAll.php')">Xoa</a>
                <a class ='btn-add' href="javascript:submitForm('frmSubmit', 'changeOder.php')">Luu file</a>
            </div>
            <?php 
                if (isset($_SESSION["message"])){ 
                    $msg =  $_SESSION["message"];
                    unset($_SESSION["message"]);              
            ?>
            <div class="message">
                <p><?php echo $msg; ?></p>
            </div>
            <?php } ?>
           <?php include "list.php"?>
        </div>
    </div>
</body>
</html>
<script stype='text/javascript'>
    $('#checkAll').click(function(){
        var check = $(this).prop('checked');
        $('.checkBox').prop('checked', check);
    });

    function submitForm(id, link){
        // alert(link);
        var form = $("#" + id);
        form.attr("action", link);
        form.submit();
        // $("#" + id).submit();
    }
</script>