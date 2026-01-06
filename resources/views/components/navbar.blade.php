<nav class="navbar">
    <div class="nav-left">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="POK Logo" style="height: 50px;">
        </a>
    </div>

    <div class="nav-menu">
        <a href="{{ url('/#tentangkami') }}">Tentang Kami</a>
        <a href="{{ url('/#produk')}}">Produk</a>
        <a href="{{ url('/#fasilitas')}}">Fasilitas</a>
        <a href="{{ url('/#promo')}}">Promo</a>
    </div>

    <div class="nav-right">
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
        @else
            <span class="me-2">Halo, {{ Auth::user()->nama_lengkap }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endguest
    </div>
</nav>