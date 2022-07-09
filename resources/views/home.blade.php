
@extends('layout.main')

@section('content')

            <div class="manga-area areabook">
                <h4>Manga</h4>
                <div class="wrap">
                    @foreach ($manga as $mg)
                    <a class="item-forsale" href="/buku/{{$mg->id}}">
                        <div class="img-buku">
                            <img src="upload/{{$mg->cover}}" alt="">
                        </div>
                        <div class="bawah-item">
                            <div class="info-buku">
                                <p class="judul-buku">
                                    {{$mg->judul}}
                                </p>
                                <p class="penulis-buku">
                                    {{$mg->penulis}}
                                </p>
                                <p class="jenis-buku">
                                    {{$mg->jenis}}
                                </p>
                                <p class="harga-buku " >
                                    Rp.{{$mg->harga}}
                                </p>
                            </div>

                        </div>
                    </a>

                    @endforeach
                </div>
            </div>
            <div class="Novel-area areabook">
                <h4>Novel</h4>
                <div class="wrap">
                    @foreach ($novel as $nv)
                    <a class="item-forsale" href="/buku/{{$nv->id}}">
                        <div class="img-buku">
                            <img src="upload/{{$nv->cover}}" alt="">
                        </div>
                        <div class="bawah-item">
                            <div class="info-buku">
                                <p class="judul-buku">
                                    {{$nv->judul}}
                                </p>
                                <p class="penulis-buku">
                                    {{$nv->penulis}}
                                </p>
                                <p class="jenis-buku">
                                    {{$nv->jenis}}
                                </p>
                                <p class="harga-buku " >
                                    Rp.{{$nv->harga}}
                                </p>
                            </div>

                        </div>
                    </a>

                    @endforeach
                </div>

            </div>
            <div class="IT-area areabook">
                <h4>Buku Ilmu komputer</h4>
                <div class="wrap">

                    @foreach ($computer as $it)
                    <a class="item-forsale" href="/buku/{{$it->id}}">
                        <div class="img-buku">
                            <img src="upload/{{$it->cover}}" alt="">
                        </div>
                        <div class="bawah-item">
                            <div class="info-buku">
                                <p class="judul-buku">
                                    {{$it->judul}}
                                </p>
                                <p class="penulis-buku">
                                    {{$it->penulis}}
                                </p>
                                <p class="jenis-buku">
                                    {{$it->jenis}}
                                </p>
                                <p class="harga-buku " >
                                    Rp.{{$it->harga}}
                                </p>
                            </div>

                        </div>
                    </a>

                    @endforeach
                </div>

            </div>
@endsection
