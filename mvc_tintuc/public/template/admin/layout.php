<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {}

        .header {
        background-color: red;
        }

        .main-content {
        background-color: oldlace;
        height: 500px;
        }

        .footer {
        background-color: blue;
        height: 50px
        }
    </style>
</head>
<body>
    
    <div class="header">
        <h1>Header Content</h1>
    </div>

    <div class="main-content">
        <?php include 'app/'.$this->request['app'].'/view/'.$includeView.'.php';?>
    </div>

    <div class="footer">
        <Footer>Footer Content</Footer>
    </div>
</body>
</html>