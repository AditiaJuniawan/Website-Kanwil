<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login & Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
            <h2><a href="{{ url('/') }}"><i class="fa-solid fa-angle-left"></i></a></h2>
    </div>

    <!-- <div class="custom-shape-divider-top-1776321563">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
    </div> -->
    <div class="wrapper">
        
        <div class="container">
            
            
            <div class="form-box" id="loginForm">
                <div class="logo">
                    <img src="{{ asset('images/logokementerian.png') }}">
                </div>
                <h2>DItjenpas Banten</h2>
                @if (session('error'))
                        <div >{{session('error')}}</div>
                @endif

                
                <form action="{{ url('/sesi/login') }}" method="POST">
                   @csrf
                    <input type="email" name="email" placeholder="Email@example.com" id="email" autofocus required>
                    <input type="password" name="password" placeholder="Kata Sandi" id="password" autocomplete="off" required>
                    
                    <button type="submit" name="submit" class="btn">Login</button>
                </form>
                <p>Belum punya akun? <a href="#" onclick="toggleForm()">Daftar di sini</a></p>
            </div>

            <div class="form-box hidden" id="registerForm">
                <div class="logo">
                    <img src="{{ asset('images/logokementerian.png') }}">
                </div>
                <h2>Daftar Akun</h2>
                <form>
                    <input type="text" placeholder="Nama Lengkap" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Kata Sandi" required>
                    <button type="submit" class="btn">Register</button>
                </form>
                <p>Sudah punya akun? <a href="#" onclick="toggleForm()">Login di sini</a></p>
            </div>
        </div>
    </div>
    <script src="{{ asset('java/script2.js') }}"></script>
</body>
</html>