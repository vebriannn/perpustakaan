<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libtel</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/assets/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary pt-4 pb-4">
            <div class="container">
                <a class="navbar-brand ms-5" href="#">
                    <img src="{{ asset('assets/frontend/assets/images/logo-libtel.svg') }}" alt="logo"
                        width="150">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse me-5" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('member.katalog') }}">Katalog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak Kami</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto gap-2">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 pt-2 pb-2" aria-current="page" href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero-section py-5">
        <div class="container text-center">
            <img src="{{ asset('assets/frontend/assets/images/banner.svg') }}" alt="img hero" class="img-fluid">
        </div>
    </section>

    <section class="book-view py-3">
        <div class="container ">
            <div class="title-book d-flex justify-content-between align-items-center ms-5 me-5">
                <h2 class="bold">Buku Populer</h2>
                <a href="#" class="text-decoration-none">Lihat Semua</a>
            </div>
            <div class="content ms-5 me-5">
                <p class="fw-bold">
                    <span>Vue Js</span>
                    Sentuhan Ajaib <br> untuk antarmuka <br> Pengguna yang lebih <br> baik
                </p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/512px-Vue.js_Logo_2.svg.png"
                    alt="vue" width="140" height="140">
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
