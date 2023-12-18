<?php
include("koneksi.php");

if (isset($_POST['btn'])) {
  $id = $_POST['id'];
  $enp = $_POST['npp'];
  $disk = $_POST['diskk'];
  $band = $_POST['bandd'];
  $sqld = $_POST['sqll'];
  $harga = $_POST['hargaa'];

  $sql = "UPDATE host SET np='$enp', disk='$disk', band='$band', sq='$sqld',
    harga='$harga' WHERE id=$id";
  $query = mysqli_query($db, $sql);
};
if ($query) {
  header('Location: index.php');
} else {
  die("Gagal menyimpan perubahan...");
};

