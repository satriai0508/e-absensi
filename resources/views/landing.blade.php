
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
      /* Large devices (desktops, 992px and up) */
      @media (min-width: 992px) {
        .nav-link {
          transform: uppercase;
          -webkit-transform: uppercase;
          -moz-transform: uppercase;
          -ms-transform: uppercase;
          -o-transform: uppercase;
          margin-right: 30px;
        }

      }

      /* Medium devices (tablets, 768px and up) */
      @media (min-width: 768px) {
        .nav-link {
          transform: uppercase;
          -webkit-transform: uppercase;
          -moz-transform: uppercase;
          -ms-transform: uppercase;
          -o-transform: uppercase;
          margin-right: 30px;
        }
      }

      /* Small devices (landscape phones, 576px and up) */
      @media (min-width: 576px) {
        .nav-link {
          transform: uppercase;
          -webkit-transform: uppercase;
          -moz-transform: uppercase;
          -ms-transform: uppercase;
          -o-transform: uppercase;
          margin-right: 30px;
        }
      }
    </style>

    <title>Absensi | Landing Page</title>
  </head>
  <body class="bg-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">
      <div class="container-fluid container">
        <a class="navbar-brand text-white text-uppercase" href="{{ route('home') }}">e-Absensi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-lg-auto text-uppercase text-decoration-none">
          @if(Route::has('login'))
            @auth
                <a class="nav-link me-lg-5 border-bottom btn-outline-warning text-white" href="{{ route('home') }}">Home</a>
            @else
                <a class="nav-link me-lg-5 border-bottom btn-outline-warning text-white" href="{{ route('login') }}">Login</a>
                @if(Route::has('register'))
                <a class="btn btn-warning border-bottom border-light me-lg-5 text-white border-2" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
          @endif
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="container bg-warning rounded-3 mt-5">
      <div class="p-5 mb-4 rounded-3 d-flex justify-content-center">
        <div class="container-fluid py-5">
          <a href="#" class="display-4 fw-bold text-white text-decoration-none">Elektronik Absensi</a>
          <p class="text-white h3">Selamat Datang di Elektronik Absensi.</p>
        </div>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Footer -->
    <footer class="footer text-center text-white mb-lg-5 mt-lg-4">
      &copy; All Rights Reserved by : Teknologi Rekayasa Perangkat Lunak 2021.
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <!-- <script src="/js/bootstrap.js"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
