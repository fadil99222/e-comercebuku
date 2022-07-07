@extends('layout.main')


@section('content')
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
