<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- CSRF Token -->
    <meta content="{{ csrf_token() }}" name="csrf-token">

    <title>{{ !empty($configSystem['website_title']) ? $configSystem['website_title'] : 'Cloudzone Dev' }}</title>

    <!-- Fonts -->
    <link href="//fonts.bunny.net" rel="dns-prefetch">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- Bootstrap css --}}
    <link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap5/advanced-css/bootstrap.min.css') }}">
    {{-- Font Awesome 5  --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <!-- Scripts -->
    <script src='{{ asset('jquery/jquery.min.js') }}' defer></script>
</head>

<body>
    <div id="app">
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="row mw-75 d-flex justify-content-center">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li>Column</li>
                            <li>bdbsd</li>
                            <li>bdbsd</li>
                            <li>bdbsd</li>
                            <li>bdbsd</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="https://khoroblox.vn/upload/setting/0426812b8306bca5f49feb450356825b.png" width="250px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  href="#"><i class="fas fa-home"></i> Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-credit-card"></i> Nạp thẻ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-university"></i> Nạp Atm / Momo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-question-circle"></i> Hướng dẫn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-star"></i> Đánh giá</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger btn-login" href="#"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container" style="max-width: 1600px">
            @yield('content')
        </main>

    </div>
    <script src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
</body>
<footer class="bg-dark text-light">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6">
            <p>
                <img src="https://khoroblox.vn/upload/setting/0426812b8306bca5f49feb450356825b.png" width="250px" alt="">
            </p>
          <h5>KHOROBLOX.VN | SHOP BÁN ACC UY TÍN - CHẤT LƯỢNG - GIÁ RẺ</h5>
          <ul class="list-unstyled">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Delete User</a></li>
            <li><a href="#">DMCA.com Protection Status</a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>VỀ CHÚNG TÔI</h5>
          <p>Chúng tôi luôn lấy uy tín đặt trên hàng đầu đối với khách hàng, hy vọng chúng tôi sẽ được phục vụ các bạn. Cảm ơn!</p>
          <p><strong>Thời gian hỗ trợ:</strong><br> Sáng: 8h00 -> 11h30 | Chiều: 13h00 -> 19h00</p>
        </div>
      </div>
      <hr>
      <p class="text-center">KHOROBLOX.VN - HỆ THỐNG BÁN ACC TỰ ĐỘNG - ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.</p>
      <p class="text-center">&copy; Vận hành bởi WonJunSeong, All Rights Reserved.</p>
    </div>
  </footer>
  

</html>
