<nav class="navbar navbar-expand-lg sticky-top ">
    <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{$icon}}" alt="" width="30" height="25" class="d-inline-block align-text-top">
              booku.com
            </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{($title === "admin") ? 'active' : '' }}" aria-current="page" href="/admin">Info Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($title === "add") ? 'active' : '' }}" href="/tambahbuku">Tambah</a>
            </li>
          </ul>
      </div>
    </div>
</nav>
