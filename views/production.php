<!DOCTYPE html>
<html>
<head>
<?php include("head.php"); ?>
<link rel='stylesheet' media='print' href='resources/productionCSS/print.css' />
<link rel='stylesheet' media='screen' href='resources/productionCSS/preview.css' />
<body>
<?php
  $ID = "1659616";
  $NAME = "Cookie Monster";
?>
<?echo $_POST['lastName'];?>
115
<div class='noPrint'>
<?php include("navbar.php"); ?>
<br>
</div>

<div class="container">
  <div class="row">
    <div class="col-5">
      <?php include("card.php"); ?> 
  </div>
  <div class="col-4 noPrint">
    <?php include("form.php"); ?>
  <div>
</div>
</body>
</html>