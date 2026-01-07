<section id="tentangkami" class="about">
    <div class="about-left">
        <h2>Kenali Lebih Dekat <span>Proyek Kami</span></h2>
        <p>
            Perumahan Orang Keren menghadirkan hunian terjangkau dengan konsep ramah lingkungan dan
            fasilitas lengkap. Dirancang modern dan nyaman, perumahan ini menawarkan lingkungan
            asri, aman, serta akses strategis untuk mendukung kualitas hidup yang lebih baik.
        </p>
        
        <a href="{{ url('/#footer')}}" class="btn">Selengkapnya</a>

    </div>

    <div class="about-right">
        <img src="/images/map.jpg" alt="Lokasi Proyek">
    </div>
</section>


<!-- ================= FACILITIES ================= -->
<section id="fasilitas" class="facilities">
    <h2>Jelajahi <span>Fasilitas Kami</span></h2>

    <div class="facility-grid">
        <div class="facility-card">
            <img src="{{ asset('images/icon-security.png') }}">
            <h4>Keamanan 24 Jam</h4>
            <p>Sistem keamanan aktif sepanjang hari.</p>
        </div>

        <div class="facility-card">
            <img src="{{ asset('images/icon-gym.png') }}">
            <h4>GYM</h4>
            <p>Fasilitas olahraga modern dan lengkap.</p>
        </div>

        <div class="facility-card">
            <img src="{{ asset('images/icon-bank.png') }}">
            <h4>Bank Sampah</h4>
            <p>Pengelolaan sampah ramah lingkungan.</p>
        </div>

        <div class="facility-card">
            <img src="{{ asset('images/icon-park.png') }}">
            <h4>Taman</h4>
            <p>Area hijau untuk bersantai bersama keluarga.</p>
        </div>

        <div class="facility-card">
            <img src="{{ asset('images/icon-school.png') }}">
            <h4>Sekolah</h4>
            <p>Akses pendidikan yang dekat dan mudah.</p>
        </div>

        <div class="facility-card">
            <img src="{{ asset('images/icon-mosque.png') }}">
            <h4>Tempat Ibadah</h4>
            <p>Fasilitas ibadah nyaman dan representatif.</p>
        </div>
    </div>
</section>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perumahan Orang Kere(n)</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- bawah -->
</head>
<body>
    <!-- Header atau Navbar jika ada -->
    
    <section id="produk" class="container my-5">
        <h2 class="judul">
            Temukan <span>Rumah Idamanmu</span>
        </h2>

        <div class="grid-rumah">
            <div class="card-rumah">
                <img src="{{ asset('images/ceplis.jpeg') }}" alt="Komplek CityNest">
                <a href="{{ route('komplek.citynest') }}" class="btn-rumah">Komplek CityNest</a>
            </div>

            <div class="card-rumah">
                <img src="{{ asset('images/bulug.jpeg') }}" alt="Komplek CityHaven">
                <a href="{{ route('komplek.cityhaven') }}" class="btn-rumah">Komplek CityHaven</a>
            </div>

            <div class="card-rumah">
                <img src="{{ asset('images/papili.jpeg') }}" alt="Komplek EcoRow Living">
                <a href="{{ route('komplek.ecorow') }}" class="btn-rumah">Komplek EcoRow Living</a>
            </div>

            <div class="card-rumah">
                <img src="{{ asset('images/kwadrat.jpeg') }}" alt="Komplek EcoLuxe Living">
                <a href="{{ route('komplek.ecoluxe') }}" class="btn-rumah">Komplek EcoLuxe Living</a>
            </div>
        </div>
    </section>

    <section id="promo" class="container-fluid px-0 my-5">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('images/promo.jpeg') }}" class="d-block w-100 img-promo" alt="Promo 1">
                </div>
            </div>
        </div>
    </section>

</body>
</html>