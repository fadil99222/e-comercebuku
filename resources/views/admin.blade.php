@include('partials.html-layout-top')
    {{-- Navbar --}}
    @include('partials.admin-nav')


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
                @foreach ($data as $book)
                    
                <tr>
                  <th scope="row"><img src="img/{{$book->cover}}" width="50px" alt=""></th>
                  <td>{{$book->judul}}</td>
                  <td>{{$book->penulis}}</td>
                  <td>{{$book->jenis}}</td>
                  <td>{{$book->harga}}</td>
                  <td>702</td>
                  <td>@mdo</td>
                </tr>

                @endforeach

            </tbody>
          </table>
    </div>




    @include('partials.html-layout-bott')
