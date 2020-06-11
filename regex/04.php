<?php 
    $html = "<h1> Tiêu đề bài viết</h1><p>đây là nội dung1</p><p>đây là nội dung2</p>";
    $pattern = "#<p>[^<]+</p>#";
    $newString = preg_replace($pattern,"<span>Nọi dung</span>",$html);

    echo $html;
    echo '<br>';
    echo $newString;


    $html2 = '<p>
    <h1>Tiêu đề bài viết</h1>
    <p>Nội dung thứ nhất</p>
    <script>
    alert("xin chào");
    </script>
    <p>Nội dung thứ 2</p>
    <script>
        console.log("123");
    </script>
</p>';
$pattern1 = "#<script>[^<]+</script>#";
    $newString = preg_replace($pattern1,"",$html2);

    
    echo $newString;


    $string = '<p style="color:red;font-size:18px" title="test title"> Nội dung bài viết3</p><h2> tiêu đề3</h2>';
    echo $string;
    $pattern3 = "#(<[a-zA-Z0-9]+)\s+[^>]*#";
    $newString = preg_replace($pattern3,"$1",$string);
    echo $newString;
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h1>Tiêu đề bài viết</h1>
        <p>Nội dung thứ nhất</p>
        <script>
        alert('xin chào');
        </script>
        <p>Nội dung thứ 2</p>
        <script>
            console.log("123");
        </script>
    </p>
</body>
</html> -->