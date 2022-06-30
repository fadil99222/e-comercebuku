<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Booku.com</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container">
                <a class="navbar-brand" href="#">
                  <img src="{{$icon}}" alt="" width="30" height="25" class="d-inline-block align-text-top">
                  booku.com
                </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Info Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tambahbuku">Tambah</a>
                </li>
              </ul>
          </div>
        </div>
    </nav>

    {{--Info dan pencarian  --}}
    <div class="container">
        <div class="info-admin">
            <div class="jumlah-buku dimensi-info">
                <div class="caption">
                    Jumlah buku yang terdaftar di booku.com
                </div>
                <div class="data-buku">
                    <h6 class="tengah-text">
                        389 <i class="fa-solid fa-book"></i>
                    </h6>
                </div>
            </div>
            <div class="jumlah-transaksi dimensi-info">
                <div class="caption">
                    Jumlah transaksi yang berlangsung
                </div>
                <div class="data-buku">
                    <h6 class="tengah-text">
                        389 <i class="fa-solid fa-cart-shopping"></i>
                    </h6>
                </div>
            </div>
            <div class="tambah-buku dimensi-info">
                <div class="caption">
                    Tambah Buku
                </div>
                <div class="data-buku">
                    <h6 class="tengah-text"><a href="/tambahbuku"><button class="but-tambah"><i class="fa-solid fa-plus"></i> Tambah</button></a>

                    </h6>
                </div>
            </div>
        </div>
        <div class="container mt-lg-2">
            <div class="cari-buku">
                <h3>Masukkan Judul Buku</h3>
                <div class="container ">
                    <form class="search cari"role="search">
                        <input class="form-search" type="search" placeholder="Cari" aria-label="Search">
                        <button class="but-search " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                     </form>
                </div>

            </div>
        </div>
    </div>

    {{-- tabel buku --}}
    <br><br>
    <div class="container">
        <table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">cover</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">penulis</th>
                <th scope="col">jenis</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah buku</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Naruto ch 100</td>
                <td>masashi kishimoto</td>
                <td>manga</td>
                <td>Rp.100.000</td>
                <td>702</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>2142</td>
                <td>@fat</td>
              </tr>
            </tbody>
          </table>
    </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/bb9ec5ebb4.js" crossorigin="anonymous"></script>
</body>
</html>
