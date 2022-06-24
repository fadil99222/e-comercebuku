<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" >

    <link rel="icon" href="{{$icon}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{$icon}}" alt="" width="40px"></a>
          <form class="search "role="search">
            <span>
                <input class="form-search" type="search" placeholder="Cari" aria-label="Search">
                <button class="but-search " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </span>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Novel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Manga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Buku Sekolah</a>
                </li>

              </ul>

                <a class="nav-link " href="#">Login</a>


          </div>

        </div>
      </nav>

      {{-- Slide content --}}

      <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/Narto.jpg" class="d-block  ukuran" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/onepiece.jpg" class="d-block  ukuran" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/novel.jpg" class="d-block ukuran"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Naruto.png" class="d-block ukuran"  alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>



        {{-- content --}}
        <div class="container">
            <div class="wrap">
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item-forsale">
                    <div class="img-buku">
                        <img src="img/narto2.jpg" alt="">
                    </div>
                    <div class="bawah-item">
                        <div class="info-buku">
                            <p class="judul-buku">
                                Naruto CH 100
                            </p>
                            <p class="harga-buku">
                                Rp.100.000
                            </p>
                            <p class="penulis-buku">
                                masashi kishimoto
                            </p>
                            <p class="jenis-buku">
                                manga
                            </p>
                        </div>
                        <div class="action">
                            <button class="go-to-page">
                                Ke Halaman <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <button class="keranjang">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                            <button class="buy-now">
                                Beli sekarang
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bb9ec5ebb4.js" crossorigin="anonymous"></script>

</body>
</html>
