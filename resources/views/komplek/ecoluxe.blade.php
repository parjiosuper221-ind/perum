<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komplek EcoLuxe Living</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Komplek EcoLuxe Living</h1>
        
        <div class="komplek-detail">
            <div class="komplek-images">
                <img src="{{ asset('images/kwadrat.jpeg') }}" alt="EcoLuxe Living" class="main-image">
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
                    <li>Luas Tanah: 100 m²</li>
                    <li>Luas Bangunan: 70 m²</li>
                    <li>Kamar Tidur: 3</li>
                    <li>Kamar Mandi: 2</li>
                    <li>Carport: 2 Mobil</li>
                </ul>

                <h2>Fasilitas</h2>
                <ul>
                    <li>Keamanan 24 Jam dengan CCTV</li>
                    <li>Clubhouse</li>
                    <li>Kolam Renang</li>
                    <li>Taman Bermain Anak</li>
                    <li>Area Jogging Track</li>
                </ul>

                <h2>Harga</h2>
                <p class="price">Mulai dari Rp 700.000.000</p>

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