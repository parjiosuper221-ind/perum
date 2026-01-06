<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Akun | PWP POK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #1a1a1a; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .auth-card { background-color: #d9d9d9; border-radius: 25px; padding: 40px; width: 400px; position: relative; }
        .auth-title { color: #7cb524; font-weight: bold; margin-bottom: 25px; font-size: 24px; }
        .form-control { border-radius: 10px; border: none; padding: 10px; margin-bottom: 12px; text-align: center; }
        .btn-auth { background-color: #7cb524; color: white; border: none; border-radius: 10px; padding: 10px; width: 100%; font-weight: bold; }
    </style>
</head>
<body>
    <div class="auth-card text-center">
        <h2 class="auth-title">Buat Akun</h2>
        @if($errors->any())
            <div class="alert alert-danger small">{{ $errors->first() }}</div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" required>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" class="form-control" placeholder="Password (min. 6)" required>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi Password" required>
            <button type="submit" class="btn btn-auth mt-2">Daftar</button>
        </form>
        <p class="mt-3 small">Sudah punya akun? <a href="{{ route('login') }}" style="color:#7cb524; text-decoration:none; font-weight:bold;">Sign-in</a></p>
    </div>
</body>
</html>