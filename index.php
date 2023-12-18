<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/css/uikit.min.css" />

  <title>DitHost</title>
</head>

<body>

  <nav class="navbar sticky-top navbar-expand-sm shadow-sm" style="backdrop-filter: blur(5px)">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DitHost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pc">Beli Hosting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah paket</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center p-2 text-bg-primary text-white mb-8">
    <p class="fs-3 mt-2">
      DitHost
    </p>
    <hr>
    <p class="fs-5">
      Web Hosting Termurah dan Tercepat! Hosting di sini menggunakan
      Data Center Tier 4 dengan uptime 99,995% (sesuai standar dc tier 4).
    </p>
    <hr>
    <p class="fs-5">Klik garis 3 pojok kanan atas untuk fitur tambah paket</p>
  </div>
  <br>
  <div id="pc" class="uk-container text-center">
    <div class="uk-child-width-1-3@s" uk-grid>
      <?php
      include("koneksi.php");
      $sql = "SELECT * FROM host";
      $query = mysqli_query($db, $sql);

      while ($ind = mysqli_fetch_array($query)) {
      ?>
        <div>
          <div class="uk-card uk-card-default">
            <div class="uk-card-body">
              <h3 class="uk-card-title"><?php echo $ind['np']; ?> </h3>
              <p>
                <?php echo $ind['disk']; ?>
              </p>
              <p>
                <?php echo $ind['band']; ?>
              </p>
              <p>
                <?php echo $ind['sq']; ?>
              </p>
              <a class="btn btn-danger m-1" href="edit.php?id=<?php echo $ind['id']; ?>">Edit</a>

              <a class="btn btn-danger m-1" href="hapus.php?id=<?php echo $ind['id']; ?>">Hapus</a>

              <button onclick="c()" type="button" class="btn btn-primary m-1">Beli <?php echo
                                                                                    $ind['harga']; ?> </button>
            </div>
          </div>
        </div>
      <?php
      };
      ?>
    </div>
  </div>
  <br>
  <footer>
    <div class="container-fluid p-5 text-center bg-dark text-white">
      <p class="fs-6">
        Licensed under <a href="https://spdx.org/licenses/MIT.html">MIT</a>
      </p>
      <p class="fs-6">Bootstrap licensed under<a href="https://github.com/twbs/bootstrap/blob/main/LICENSE"> MIT</a>
      </p>
      <p class="fs-6">UIkit licensed under <a href="https://github.com/uikit/uikit/blob/develop/LICENSE.md">MIT</a>
      </p>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit-icons.min.js"></script>
  <script type="text/javascript" charset="utf-8">
    function c() {
      alert("Fitur ini tidak tersedia");
    }
  </script>
</body>

</html>
