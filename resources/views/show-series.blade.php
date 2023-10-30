<!doctype html>
<html lang="en" data-bs-theme=dark>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('where') }}">Where</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index.movies') }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index.shows') }}">Series</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/where" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/movies">Movies</a></li>
                                <li><a class="dropdown-item" href="/shows">Shows</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fine Navbar -->


    <!-- Titolone -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-4">
                <img src="/img/Detail-Series.png" class="img-responsive" alt="...">
            </div>
        </div>
    </div>
    <!-- Fine Titolone -->



    <!-- Card dettaglio Serie -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5">
                <div class="card border-0 mb-3">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{ $show['img'] }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body d-flex flex-column justify-content-between align-items-center h-100">
                          <h1 class="card-title">"{{ $show['title'] }}"</h1>
                          <p class="card-text">"{{ $show['description'] }}"</p>
                          <p class="card-text"><small class="card-text">"{{ $show['year'] }}"</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
   <!-- Fine Card dettaglio Serie -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</body>


</html>
