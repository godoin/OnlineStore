<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/84e2199ce0.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include('views/inc/header.php')?>
  <?php include('views/inc/modals.php')?>
  <?php include($contentView)?>
  <?php include('views/inc/footer.php')?>

  <!-- JS Link -->
  <script src="assets/javascript/main.js"></script>
</body>
</html>