<style>
  table {
    width: 100%;
    font-size: 2rem;
  }

  input {
    font-size: 2rem;
    width: 100%;
  }
</style>
<h2>Them san pham</h2>
<table border="1">
  <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">

<form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
  <table border="1">

    <tr>
      <td>Ten san pham</td>
      <td><input type="text" name="tensanpham" placeholder="Nhap ten"></td>
    </tr>
    <tr>
      <td>Ma san pham</td>
      <td><input type="text" name="masp" placeholder="Nhap ma"></td>
    </tr>
    <tr>
      <td>Gia</td>
      <td><input type="text" name="gia" placeholder="Nhap gia"></td>
    </tr>
    <tr>
      <td>So luong</td>
      <td><input type="text" name="soluong" placeholder="Nhap so luong"></td>
    </tr>
    <tr>
      <td>Hinh anh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Tom tat</td>
      <td><textarea rows="10" name="tomtat" style="resize:none"></textarea></td>
    </tr>
    <tr>
      <td>Noi dung</td>
      <td><textarea rows="10" name="noidung" style="resize:none"></textarea></td>
    </tr>
    <tr>

      <td>Danh muc san pham</td>
      <td>
        <select name="danhmuc">
          <?php
          $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
          $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
          while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
              <?php echo $row_danhmuc['tendanhmuc'] ?>
            </option>
            <?php
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>

      <td>Tinh trang</td>
      <td>
        <select name="tinhtrang">
          <option value="1">Kich hoat</option>
          <option value="0">An</option>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themsanpham" value="Them san pham"></td>
    </tr>
  </form>

</table>

</table>
  </table>
</form>

