 @include('partials.html-layout-top')
    {{-- Navbar --}}
    @include('partials.lsnavbar')

      {{-- Slide content --}}
      <div class="container mt-lg-3">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/Narto.jpg" class="d-block  ukuran" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/onepiece.jpg" class="d-block  ukuran" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/novel.jpg" class="d-block ukuran"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Naruto.png" class="d-block ukuran"  alt="...">
              </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>

      {{-- Area Navigasi button --}}
      <div class="container">
        <h4>Kategori</h4>
        @include('partials.lsbut')
      </div>
      {{-- pop-up login/registrasi --}}
      @include('partials.pop-up-form-login')

        {{-- content --}}
        <div class="container">
            @yield('content')
        </div>

@include('partials.html-layout-bott')
