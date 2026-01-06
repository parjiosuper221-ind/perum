<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komplek CityHaven</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Komplek CityHaven</h1>
        
        <div class="komplek-detail">
            <div class="komplek-images">
                <img src="{{ asset('images/bulug.jpeg') }}" alt="CityHaven" class="main-image">
            </div>

        <div class="property-detail">
</div>
        <div class="property-denah">
            <img src="{{ asset('images/denah.jpeg') }}"
                alt="Denah CityNest"
                class="img-denah">
        </div>

            <div class="komplek-info">
                <h2>Spesifikasi Rumah</h2>
                <ul>
                    <li>Luas Tanah: 84 m²</li>
                    <li>Luas Bangunan: 54 m²</li>
                    <li>Kamar Tidur: 2</li>
                    <li>Kamar Mandi: 2</li>
                    <li>Carport: 1 Mobil</li>
                </ul>

                <h2>Fasilitas</h2>
                <ul>
                    <li>Security 24 Jam</li>
                    <li>Taman Kota</li>
                    <li>Dekat Pusat Perbelanjaan</li>
                    <li>Akses Mudah ke Jalan Utama</li>
                    <li>Listrik 2200 Watt</li>
                </ul>

                <h2>Harga</h2>
                <p class="price">Mulai dari Rp 550.000.000</p>

                <div class="contact-buttons">
                    <a href="https://wa.me/620881027433428" class="btn btn-whatsapp" target="_blank">
                        Hubungi via WhatsApp
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-secondary">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>