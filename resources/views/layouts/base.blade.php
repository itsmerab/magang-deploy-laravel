<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="pt-5 mb-5">
            <h1 class="text-body-emphasis">@yield('judul')</h1>
            <div class="fs-5 col-mb-8">
                @yield('isi-utama')
            </div>
        </div>

    <div class="row">
        <div class="col-md-4">
            @yield('isi-kiri')
        </div>
        <div class="col-md-8">
            @yield('isi-kanan')
        </div>
    </div>
    @include('layouts.footer')
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>