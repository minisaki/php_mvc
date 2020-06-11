<html lang="en" style="height: auto;">
<head>
  <?php include 'elements/head.php' ?>
  
</head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">
  <?php include 'elements/top_nav.php' ?>
  <?php include 'elements/sidebar.php' ?>
    <?php include 'app/'.$this->request['app'].'/view/'.$includeView.'.php'; ?>
  <?php include 'elements/footer.php' ?>
  <?php include 'elements/script.php' ?>

</body></html>