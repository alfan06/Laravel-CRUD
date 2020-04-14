<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title> @yield('title') </title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <!-- bagian judul halaman -->
                        <h2> @yield('judul_halaman') </h2>
                    </div>
                    <div class="card-body">
                        <!-- bagian konten blog -->
                        @yield('konten')
                    </div>
                <div class="card">
            </div>
        </div>
    </div>
</body>
</html>