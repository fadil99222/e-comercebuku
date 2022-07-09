@include('partials.html-layout-top')
    {{-- Navbar --}}
 @include('partials.admin-nav')

<div class="container py-4">
    <h5>
        Jumlah Pesanan = {{$jumlahpsn}}
    </h5>

    <table class="table">
        <thead>
          <tr class="table-primary">
            <th scope="col">Nama Pembeli</th>
            <th scope="col">No Telpon</th>
            <th scope="col">alamat</th>
            <th scope="col">metode pembayaran</th>
            <th scope="col">Buku Pesanan</th>
            <th scope="col">harga pesanan</th>
            <th scope="col">Status</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $book)

            <tr>

              <td>{{$book->nama}}</td>
              <td>{{$book->no_telpon}}</td>
              <td>{{$book->alamat}}</td>
              <td>{{$book->metod_bayar}}</td>
              <td>{{$book->buku_pesanan}}</td>
              <td>{{$book->harga_pesanan}}</td>
              <td><a href="/deletee/{{$book->id}}" class="btn btn-primary" >Complite</a></td>
            </tr>

            @endforeach

        </tbody>
      </table>
</div>

@include('partials.html-layout-bott')
