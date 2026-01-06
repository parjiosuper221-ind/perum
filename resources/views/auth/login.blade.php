<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign-in | PWP POK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #1a1a1a; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .auth-card { background-color: #d9d9d9; border-radius: 25px; padding: 40px; width: 400px; position: relative; }
        .auth-title { color: #7cb524; font-weight: bold; margin-bottom: 25px; font-size: 28px; }
        .form-control { border-radius: 10px; border: none; padding: 12px; margin-bottom: 15px; text-align: center; }
        .btn-auth { background-color: #7cb524; color: white; border: none; border-radius: 10px; padding: 10px 40px; font-weight: bold; width: 100%; }
    </style>
</head>
<body>
    <div class="auth-card text-center">
        <h2 class="auth-title">Sign-in</h2>
        
        @if(session('success'))
            <div class="alert alert-success small">{{ session('success') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="Masukkan akun anda" required>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required>
            <button type="submit" class="btn btn-auth mt-2">Login</button>
        </form>
        <p class="mt-4 small">Belum punya akun? <a href="{{ route('register') }}" style="color:#7cb524; text-decoration:none; font-weight:bold;">buat akun baru</a></p>
    </div>
</body>
</html>