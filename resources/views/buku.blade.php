@include('partials.html-layout-top')
{{-- Navbar --}}
@include('partials.lsnavbar')

@include('partials.pop-up-form-login')
{{-- content --}}
<div class="container py-5">
        <div class="row">
                {{-- gambar --}}
                <div class="col-3 img-item rounded-4 px-0 overflow-hidden max-h-10 ">
                    <img src="img/narto2.jpg" class="img-fluid" alt="">
                </div>
                {{-- deskripsi item --}}
                <div class="col-4 offset-1 info-item rounded-4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 ">
                                <h4>
                                    Naruto
                                </h4>
                            </div>
                        </div>
                        <div class="row py-2 ">
                            <div class="col-5 ">
                                <p class="my-0">manga</p>
                                <p class="my-0">mashashi khisimoto</p>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-7 ">
                                <h3>Rp. 100000</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    Deskripsi
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat quidem non molestias, possimus quae consequatur. Suscipit sunt architecto repellendus quae, eos laboriosam magnam nisi quidem aliquam aspernatur enim, velit fuga delectus adipisci facilis dolore? Aperiam, nulla modi doloremque molestiae ea, dolor earum odit quidem maiores optio quibusdam blanditiis ad similique quo sequi magnam distinctio illum temporibus in explicabo rem architecto, nostrum aliquam nemo? Hic a distinctio fuga ab. Mollitia dolores nulla debitis quos temporibus voluptates. Esse aspernatur facilis, reprehenderit dolorum maxime enim consequuntur unde eius ipsa eos quisquam repellendus laudantium. Sed, reprehenderit ullam esse culpa officia voluptate ut sunt consequatur?
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
                                <img src="img/narto2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-8 pt-4">
                                <h4>judul judul</h4>
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
                                    <h4>Rp. 100000</h4>
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


@include('partials.hmtl-layout-bott')


