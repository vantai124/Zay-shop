<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>
                {{-- <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a>
                </li> --}}
                <div class="dropdown mt-2 ms-3">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Go back to <span class="colorbackground">Shop Zay </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item " href="{{ route('home.index') }}">Home</a></li>
                      <li><a class="dropdown-item" href="{{ route('home.about') }}">About</a></li>
                      <li><a class="dropdown-item" href="{{ route('product.index') }}">Product</a></li>
                    </ul>
                  </div>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    {{-- <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div> --}}
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container-fluid text-center text-md-start footer1 text-light pt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3 "></i><span class="colorbackground fa-3x">Zay shop</span>
            </h6>
            <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Home </a>
            </p>
            <p>
              <a href="#!" class="text-reset">About</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Product</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Cart</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4 footer2 text-light">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Nhom12</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
