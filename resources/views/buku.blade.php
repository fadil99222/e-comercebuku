<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" >

    <link rel="stylesheet" href="css/buku.css" >
    <link rel="stylesheet" href="css/button.css" >


    <link rel="icon" href="{{$icon}}" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Booku.com</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top ">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{$icon}}" alt="" width="30px"></a>
          <form class="search cari"role="search">

                <input class="form-search" type="search" placeholder="Cari" aria-label="Search">
                <button class="but-search " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link"  href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/novel">Novel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/manga">Manga</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/computer">Buku Computer</a>
                </li>

              </ul>

                <a class="nav-link " href="/admin">Login</a>


          </div>

        </div>
    </nav>

      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bb9ec5ebb4.js" crossorigin="anonymous"></script>

</body>
</html>