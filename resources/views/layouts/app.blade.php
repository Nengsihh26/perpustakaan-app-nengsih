<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Peminjaman</title>
    <!-- Tambahkan stylesheet atau link ke CDN yang diperlukan di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px; /* Menyesuaikan tinggi navbar */
            margin: 0; /* Menghapus margin default dari body */
            padding-bottom: 60px; /* Memberikan ruang di bagian bawah untuk footer */
        }
        header {
            background-color: #343a40; /* Warna latar belakang navbar */
            color: #ffffff; /* Warna teks navbar */
            padding: 10px 0;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* Membuat header tetap di atas konten */
        }
        main {
            margin-top: 80px; /* Menyesuaikan margin atas konten utama */
        }
        footer {
            background-color: #343a40; /* Warna latar belakang footer */
            color: #ffffff; /* Warna teks footer */
            text-align: center;
            padding: 10px 0;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>CRUD Peminjaman</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Aplikasi Peminjaman. Hak Cipta Dilindungi.</p>
        <!-- Tambahkan konten footer sesuai kebutuhan -->
    </footer>

    <!-- Tambahkan script atau link ke CDN JavaScript yang diperlukan di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
