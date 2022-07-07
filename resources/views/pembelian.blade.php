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
