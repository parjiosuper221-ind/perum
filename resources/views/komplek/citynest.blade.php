<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komplek CityNest</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Komplek CityNest</h1>
        
        <div class="komplek-detail">
            <div class="komplek-images">
                <img src="{{ asset('images/ceplis.jpeg') }}" alt="CityNest" class="main-image">
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
                    <li>Luas Tanah: 90 m²</li>
                    <li>Luas Bangunan: 60 m²</li>
                    <li>Kamar Tidur: 3</li>
                    <li>Kamar Mandi: 2</li>
                    <li>Carport: 1 Mobil</li>
                </ul>

                <h2>Fasilitas</h2>
                <ul>
                    <li>Keamanan 24 Jam</li>
                    <li>Masjid</li>
                    <li>Taman Bermain</li>
                    <li>One Gate System</li>
                    <li>Jalan Aspal Hotmix</li>
                </ul>

                <h2>Harga</h2>
                <p class="price">Mulai dari Rp 650.000.000</p>

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