<?php
include("koneksi.php");

if (isset($_GET['id'])) {
  $ids = $_GET['id'];

  $sql = "DELETE FROM host WHERE id=$ids";
  $db = mysqli_query($db, $sql);

  if ($query) {
    header('Location: index.php?status=sukses');
  } else {
    header('Location: index.php?status=gagal');
  }
}

