<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\style.css">
</head>
<header>
<?php
/*bar de navigation*/
include('../header.php');
?>
</header>
<html>
<body>
    <!-- menu de base. -->
  <?php
  include('./php/menu.php');
  ?>
   <!-- ********************************** -->
   <!-- centre du contenu de la page -->
   <?php
   include('./php/center.php');
   ?>
<!-- ****************************** -->
<?php
include('./php/ressource.php');
   ?>
   
</body>
</html>