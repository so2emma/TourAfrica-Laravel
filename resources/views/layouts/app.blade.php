<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- <link rel="stylesheet" href="css/style.css"> --}}
  <title>Tour Africa - @yield('title')</title>
</head>
<style>

</style>

<body>
  <!-- NAVBAR  -->
  <nav class=" navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Tour Africa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link @yield('index')" aria-current="page" href="{{ route('pages.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('destination')" href="{{ route('pages.destination') }}">Tour Destinations</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link @yield('booking')" href="{{ route('pages.booking') }}">Tour Booking</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link @yield('contact')" href="{{ route('pages.contact') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@yield('content')

    <!-- FOOTER  -->
    <section id="main-footer" class="text-center p-4  text-white bg-primary ">
      <div class="container">
          <div class="row">
              <div class="col">
                  <p>Copyright &copy; <span id="year"></span> Tour Africa </p>
              </div>
          </div>
      </div>
  </section>

  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
  <script>
    //Get the currnt yer for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
  <script src="js/script.js"></script>
</body>

</html>
