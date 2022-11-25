<div class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
      <div class="container mt-2">
        <div class="col-2">
          <a class="navbar-brand m-5" href="{{ route('home') }}" style="font-size:2.3rem;">
            <img src="{{asset('img/logo.png')}}" width="150" class="d-inline-block align-top" alt="logo" loading="lazy">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex" style="margin-left: 10%;margin-right: 15%;width: 40%;">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <!-- <button class="btn btn-outline-warning" type="submit">Search</button> -->
          </form>
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active a_header" href="{{ route('home') }}">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active a_header" href="{{ route('about') }}">О магазине</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active a_header" href="{{ route('catalog', [ 'id' => 'all']) }}">Каталог</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>