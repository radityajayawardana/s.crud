<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Edit</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <?php
  if (isset($_GET['id'])) {
    $ids = $_GET['id'];
    $sql = "SELECT * FROM host WHERE id=$ids";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $query = mysqli_query($db, $sql);
    $inds = mysqli_fetch_assoc($query);
  };
  ?>
  <p class="fs-2 text-center mt-5">
    Edit
  </p>
  <div class="container-fluid text-center">
    <form class="p-5" action="edit_p.php" method="POST">
      <input placeholder="ID" type="text" value="<?php echo
                                                  $inds['id']; ?>" name="id" class="form-control" readonly></input>
      <br>
      <input placeholder="Nama Paket" type="text" value="<?php echo
                                                          $inds['np']; ?>" name="npp" class="form-control"></input>
      <br>
      <input placeholder="Disk" type="text" name="diskk" value="<?php echo
                                                                $inds['disk']; ?>" class="form-control"></input>
      <br>
      <input placeholder="Bandwidth" type="text" value="<?php echo
                                                        $inds['band']; ?>" name="bandd" class="form-control"></input>
      <br>
      <input placeholder="MySQL Database" type="text" name="sqll" value="<?php echo
                                                                          $inds['sq']; ?>" class="form-control"></input>
      <br>
      <input placeholder="Harga" type="number" maxlength="11" name="hargaa" value="<?php echo
                                                                                    $inds['harga']; ?>" class="form-control"></input>
      <br>
      <button type="submit" class="btn btn-primary" name="btn">Submit</button>
    </form>
    <button onclick="window.history.back()" class="btn btn-danger" type="button">Kembali</button>
  </div>
</body>

</html>
