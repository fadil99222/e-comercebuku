<nav class="navbar navbar-expand-lg sticky-top bg-gradient ">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{$icon}}" alt="" width="30px"></a>
      <form class="search cari"role="search">

            <input class="form-search" type="search" placeholder="Cari" aria-label="Search">
            <button class="but-search " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{($title === "home") ? 'active' : '' }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "novel") ? 'active' : '' }}" href="/novel">Novel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === "manga") ? 'active' : '' }}" href="/manga">Manga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{($title === "computer") ? 'active' : '' }}" aria-current="page" href="/computer">Buku Computer</a>
                </li>

            </ul>

            <button type="button" class="log-but" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Login
            </button>
      </div>
    </div>
</nav>
