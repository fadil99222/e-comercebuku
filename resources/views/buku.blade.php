<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/buku.css" >
    <link rel="stylesheet" href="../css/button.css" >
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/item-desk.css" >

    <link rel="icon" href="{{$icon}}" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Booku.com</title>
</head>
<body>
{{-- Navbar --}}
@include('partials.lsnavbar')

@include('partials.pop-up-form-login')
{{-- content --}}
<div class="container py-5">

    <div class="row">
        {{-- gambar --}}
        <div class="col-3 img-item rounded-4 px-0 overflow-hidden max-h-10 ">
            <img src="../upload/{{$booku->cover}}" class="img-fluid" alt="">
        </div>
        {{-- deskripsi item --}}
        <div class="col-4 offset-1 info-item rounded-4">
            <div class="container-fluid">
                <div class="row pt-3">
                    <div class="col-12 ">
                        <h4>
                            {{$booku->judul}}
                        </h4>
                    </div>
                </div>
                <div class="row py-2 ">
                    <div class="col-5 ">
                        <p class="my-0">{{$booku->jenis}}</p>
                        <p class="my-0">{{$booku->penulis}}</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-7 ">
                        <h3 style="color: #47B5FF">Rp. {{$booku->harga}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>
                            Deskripsi/Sinopsis
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>
                            {{$booku->deskripsi}}
                        </p>
                    </div>
                </div>

            </div>

        </div>
        {{-- aksi --}}
        <div class="col-3 rounded-4 offset-1 aksi ">
            <div class="container">
                <div class="row py-2 border-bot">
                    <div class="col-4 rounded-2  px-0 overflow-hidden ">
                        <img src="../upload/{{$booku->cover}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-8 pt-4">
                        <h4>{{$booku->judul}}</h4>
                    </div>
                </div>
                <form action="">
                    <div class="row">
                       <div class="col-12">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-12">
                        <div class="mb-3">
                            <label for="no-hp" class="form-label">Masukkan nomor telpon</label>
                            <input type="number" class="form-control" id="no-hp" placeholder="0123456789" required>
                          </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Masukkan Almat</label>
                                <textarea class="form-control" id="Alamat" rows="3" required></textarea>
                              </div>
                        </div>
                    </div>
                    <div class="row g-1">
                        <div class="col-12">
                            <p>pilih metode pembayaran</p>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Bayar Di tempat/COD </option>
                                <option value="1">Transfer BRI</option>
                                <option value="2">OVO</option>
                                <option value="2">Indomaret</option>
                                <option value="2">Alfamart</option>
                              </select>
                        </div>
                    </div>

                    <div class="row pt-5 ">
                        <div class="col-8">
                            <h4 style="color: #47B5FF" >Rp. {{$booku->harga}}</h4>
                        </div>
                        <div class="col-4">
                            <button type="submit" class=" w-100 button-blue" >Beli</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>





</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/bb9ec5ebb4.js" crossorigin="anonymous"></script>

</body>
</html>


