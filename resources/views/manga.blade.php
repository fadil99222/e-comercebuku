@extends('layout.main')
@section('active-nav')
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link "  href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/novel">Novel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/manga">Manga</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="/computer">Buku Computer</a>
        </li>
    </ul>
@endsection
@section('active-but')
    <ul class="buttonnav">
        <li>
            <div> <a href="/"><button class="but-home "><i class="fa-solid fa-house"></i> Home</button></a></div>
        </li>
        <li>
            <div> <a href="/novel"><button class="but-novel"><i class="fa-solid fa-book-open"></i> Novel</button></a></div>
        </li>
        <li >
            <div> <a href="/manga"><button class="but-manga active-but"><i class="fa-solid fa-book"></i> Manga</button></a></div>
        </li>

        <li>
            <div> <a href="/computer"><button class="but-IT"><i class="fa-solid fa-book-atlas"></i> buku Computer</button></a></div>
        </li>
    </ul>

@endsection
@section('content')
    <div class="manga-area areabook">
        <h4>Manga</h4>
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
                        <p class="penulis-buku">
                            masashi kishimoto
                        </p>
                        <p class="jenis-buku">
                            manga
                        </p>
                        <p class="harga-buku">
                            Rp.100.000
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
