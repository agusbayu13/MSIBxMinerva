<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('style/home/img/icon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('style/auth/assets/css/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('style/auth/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/auth/assets/css/uf-style.css')}}">
    <title>Login Minerva Academy</title>
    <link href="{{asset('style/home/lib/animate/animate.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="uf-form-signin">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <a href="#"><img src="{{asset('style/auth/assets/img/person.png')}}" alt="" width="100" height="100"></a>
        <h1 class="text-white h3"><b>Minerva Login Page</b></h1>
      </div>
      <form action="/loginprocess" method="POST" class="mt-4">
        @csrf
        <div class="input-group uf-input-group input-group-lg mb-3 wow fadeInUp" data-wow-delay="0.3s">
          <span class="input-group-text fa fa-user"></span>
          <input type="text" name="email" class="form-control" placeholder="Username atau Alamat Email">
        </div>
        <div class="input-group uf-input-group input-group-lg mb-3 wow fadeInUp" data-wow-delay="0.3s">
          <span class="input-group-text fa fa-lock"></span>
          <input type="password" name="password" class="form-control" placeholder="Kata sandi">
        </div>
        <div class="d-flex mb-3 justify-content-between wow fadeInUp" data-wow-delay="0.3s">
          <div class="form-check">
            <input type="checkbox" class="form-check-input uf-form-check-input" id="exampleCheck1">
            <label class="form-check-label text-white" for="exampleCheck1">Ingat Saya</label>
          </div>
          <a href="#">Lupa kata sandi?</a>
        </div>
        <div class="d-grid mb-4 wow fadeInUp" data-wow-delay="0.5s">
          <button type="submit" class="btn uf-btn-primary btn-lg">Login</button>
        </div>
    <!--
        <div class="d-flex mb-3">
            <div class="dropdown-divider m-auto w-25"></div>
            <small class="text-nowrap text-white">Atau login dengan</small>
            <div class="dropdown-divider m-auto w-25"></div>
        </div>
        <div class="uf-social-login d-flex justify-content-center">
          <a href="#" class="uf-social-ic" title="Login with Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="uf-social-ic" title="Login with Google"><i class="fab fa-google"></i></a>
        </div>
    -->
        {{-- <div class="mt-4 text-center wow fadeInUp" data-wow-delay="0.5s">
          <span class="text-white">Belum punya akun?</span>
          <a href="/register">Daftar sekarang</a>
        </div> --}}
      </form>
    </div>

    <!-- JavaScript -->

    <!-- Separate Popper and Bootstrap JS -->
    <script src="{{asset('style/auth/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/auth/assets/js/bootstrap.min.js')}}"></script>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('style/home/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('style/home/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('style/home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('style/home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('style/home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('style/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('style/home/js/main.js')}}"></script>
  </body>
  @include('sweetalert::alert')
</html>