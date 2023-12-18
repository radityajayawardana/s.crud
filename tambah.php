<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Paket</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
  <div class="container-fluid text-center">
    <p class="fs-2 mt-5">Tambah Paket Hosting</p>
    <form class="p-5" action="tambah_p.php" method="POST">
      <input class="form-control" type="text" name="npi" placeholder="Nama Paket" />
      <br>
      <input class="form-control" type="text" name="diski" placeholder="Jumlah Penyimpanan" />
      <br>
      <input class="form-control" type="text" name="bandi" placeholder="Jumlah Bandwidth" />
      <br>
      <input class="form-control" type="text" name="sqi" placeholder="Jumlah DB" />
      <br>
      <input class="form-control" type="number" name="hargai" placeholder="Harga Paket" />
      <br>
      <input class="btn btn-primary" type="submit" name="btn" value="Submit" />
    </form>
    <button onclick="window.history.back()" class="btn btn-danger" type="button">Kembali</button>
  </div>
</body>

</html>
