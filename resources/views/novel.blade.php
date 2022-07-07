@extends('layout.main')


@section('content')
    <div class="novel-area areabook">
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
@endsection
