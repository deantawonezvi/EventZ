<!doctype html>

  <!--      =================================================================
<?php
   $url = $this->config->item('base_url');
?>
        =====================================================================-->

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<head>

  <?php
   $url = $this->config->item('base_url');
  ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EventZ: <?php echo $page ?></title>

  <!-- Foundation -->
  <link rel="stylesheet" href="<?php echo $url?>client_side/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $url?>client_side/css/foundation.css">

  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo $url?>client_side/css/app.css">

  <script src="<?php echo $url?>client_side/js/vendor/modernizr.js"></script>

  <script src="<?php echo $url?>client_side/js/app.js"></script>
</head>
<body>

