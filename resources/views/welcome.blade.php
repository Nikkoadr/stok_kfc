<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KFC Stok Management</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #fafafa;
        }
        .hero {
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #b30000;
        }
        .feature-box {
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 15px rgba(0,0,0,0.09);
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="#">
                🍗 KFC Stok
            </a>

            <div class="d-flex">

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-danger me-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger me-2">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-danger">Register</a>
                        @endif
                    @endauth
                @endif

            </div>
        </div>
    </nav>

    {{-- HERO SECTION --}}
    <section class="hero text-center">
        <div class="container">
            <h1>Sistem Manajemen Stok KFC</h1>
            <p class="lead mt-3 text-secondary">
                Pantau stok ayam, bumbu, minuman, dan bahan lainnya secara real-time kapan saja.
            </p>
        </div>
    </section>

    {{-- FITUR --}}
    <section class="mt-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="feature-box p-4 text-center">
                        <h5 class="fw-bold">📦 Stok Real-Time</h5>
                        <p class="text-secondary mt-2">
                            Update stok otomatis setiap ada transaksi keluar/masuk.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="feature-box p-4 text-center">
                        <h5 class="fw-bold">📊 Laporan Lengkap</h5>
                        <p class="text-secondary mt-2">
                            Laporan harian, mingguan, hingga bulanan untuk manajer.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="text-center py-4 mt-5 text-secondary">
        © {{ date('Y') }} Sistem Stok KFC • Dibuat oleh Fatir
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
