<div class="main">
  <?php
<<<<<<< HEAD
  if (isset($_GET["action"])) {
    $tam = $_GET["action"];
  } else {
    $tam = "";
  }
  if ($tam == "quanlydanhmucsanpham") {
    include("modules/quanlydanhmucsp/them.php");
    include("modules/quanlydanhmucsp/lietke.php");
=======
  if (isset($_GET["action"]) && $_GET['query']) {
  if (isset($_GET["action"]) && $_GET["query"]) {
    $tam = $_GET["action"];
    $query = $_GET["query"];
  } else {
    $tam = "";
    $query = "";
  }
  if ($tam == "quanlydanhmucsanpham" && $query == "add") {
    include("modules/quanlydanhmucsp/them.php");
    include("modules/quanlydanhmucsp/lietke.php");
  } elseif ($tam == "quanlydanhmucsanpham" && $query == "update") {
    include("modules/quanlydanhmucsp/sua.php");
  } elseif ($tam == "quanlysanpham" && $query == "add") {
    include("modules/quanlysp/them.php");
    include("modules/quanlysp/lietke.php");
  } elseif ($tam == "quanlysanpham" && $query == "update") {
    include("modules/quanlysp/sua.php");

  if ($tam == "quanlydanhmucsanpham" && $query == "them") {
    include("modules/quanlydanhmucsp/them.php");
    include("modules/quanlydanhmucsp/lietke.php");
  } elseif ($tam == "quanlydanhmucsanpham" && $query == "sua") {
    include("modules/quanlydanhmucsp/sua.php");
>>>>>>> 9d877e60adcb89337f499096258111e012d95aee
  } else {
    include("dashboard.php");
  }

  ?>
</div>