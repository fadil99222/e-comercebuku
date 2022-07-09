@include('partials.html-layout-top')
    {{-- Navbar --}}
    @include('partials.admin-nav')
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        
        <table>
            <tr>
                <td>judul</td>
                <td>
                    <input type="text" name="judul" id="judul">
                </td>
            </tr>
            <tr>
                <td>penulis</td>
                <td>
                    <input type="text" name="penulis" id="penulis">
                </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <select class="form-select" name="jenis" id="jenis" aria-label="Default select example">
                        <option selected>jenis </option>
                        <option value="novel">Novel</option>
                        <option value="manga">Manga</option>
                        <option value="IT">IT</option>
                      </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" id="harga"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="cover" id="cover"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="Tambah"></td>
            </tr>
        </table>

        </form>

@include('partials.html-layout-bott')
