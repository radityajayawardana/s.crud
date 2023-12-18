<?php
include("koneksi.php");

if (isset($_POST['btn'])) {
  $npp = $_POST['npi'];
  $dsk = $_POST['diski'];
  $bn = $_POST['bandi'];
  $s = $_POST['sqi'];
  $hg = $_POST['hargai'];

  $sql = "INSERT INTO host (id,np, disk, band, sq, harga, link) VALUES (NULL,
  '$npp', '$dsk', '$bn', '$s', '$hg', '')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('Location: index.php?status=sukses');
  } else {
    header('Location: index.php?status=gagal');
  }
};

