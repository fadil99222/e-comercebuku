
@extends('layout.main')

@section('content')

            <div class="manga-area areabook">
                <h4>Home</h4>
                <div class="wrap">
                    @foreach ($data as $mg)
                    <a class="item-forsale" href="/buku/{{$mg->id}}">
                        <div class="img-buku">
                            <img src="upload/{{$mg->cover}}" alt="">
                        </div>
                        <div class="bawah-item">
                            <div class="info-buku">
                                <p class="judul-buku ">
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

@endsection
