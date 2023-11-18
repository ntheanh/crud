<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Plant Shop</title>

</head>

<body>
  <div class="wrapper">
    <?php
    include("pages/header.php");
    include("pages/main.php");
    include("pages/footer.php");

    if (isset($_GET['quanly'])) {
      $tam = $_GET['quanly'];
    } else {
      $tam = '';
    }
    if ($tam == 'shop') {
      header('Location:/shop.php');
    } elseif ($tam == 'index') {
      include('main/index.php');
    }
    ?>
  </div>
  <script src="js/modalCart.js"></script>
</body>

</html>