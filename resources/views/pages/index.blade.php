@extends('layouts.app')

@section('title', 'Home Page')

@section('index','active')

@section('content')

  <!-- SHOWCASE AREA  -->
  <div class="banner-image w-100 vh-50 d-flex justify-content-center align-items-center mb-5 grad">
    <div class="text-center text-light">
      <h1>
        Visit, See and Experience the Best Africa has to Offer.
      </h1>
      <p class="">live life and Keep the best of memories...</p>
      <div class="">
       <a href="booking.html" class="btn btn-outline-light ">Tour Booking</a> <a href="booking.html" class="btn btn-outline-light ">About Us</a>
      </div>
    </div>
  </div>

  <!-- ABOUT SECTION  -->
  <div id="about" class="py-5">
    <div class="container">
      <div class="row justify-content-center align-items-center  g-3">
        <div class="col-lg-7 col-md-6">
          <p class="fs-4">
            TourAfrica is a leading tour management company in Africa with amazing tour offers. We provide quality and
            excellent services to our customers who want to explore Lagos, the Nigeria’ economic and entertainment hub
            with diverse centres of attractions.
          </p>
        </div>
        <div class="col-lg-5 col-md-6">
          <img src="img/about.png" alt="" class="img-fluid">
        </div>

      </div>



    </div>
  </div>

  <!-- our Uniqueness  -->
  <section id="unique" class="py-5 my-5 shadow">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
          <img src="img/unique.png" alt="" class="img-fluid">
        </div>

        <div class="col-md-6 text-center fs-5">
          <h4>Our Uniqueness</h4>

          <ul class="  Lead m-4">
            <li >We pick you up at your Hotel or Apartment l and return to the same place</li>
            <li >We provide excellent security cover</li>
            <li >Free refreshment and free African delicacies</li>
            <li >Hassle free booking</li>
            <li >First class Tour Guide</li>
            <li >Affordable packages </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- VISION AND MISSION  -->
  <section class="py-5 my-5 ">
    <div class="conianer">
      <div class="row g-3 justify-content-center text-center">
        <div class="col-md-3 bg-primary text-white shadow">
          <div class="heading text-center p-4">
            <h6 class=" fs-4">Vision</h6>
          </div>
          <p class="lead  fs-4">
            To become the Africa best destination tour management company
          </p>

        </div>
        <div class="col-md-3 bg-light text-dark shadow">
          <div class="heading text-center p-4">
            <h6 class=" fs-4">Mision</h6>
          </div>
          <p class="lead  fs-4">
            To offer quality and an amazing tour experience to our customers
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- WELCOME TO LAGOS  -->
  <section id="welcome"class="py-5 bg-primary text-white">
    <div class="container">
      <div class="heading text-center p-4">
        <h3 class="">Welcome To LAGOS</h3>
        <hr>
      </div>
      <p class="lead ">Lagos is Nigeria’s center of excellence with a population of over 20 million.Lagos is World’s
        sixth megacity and Africa’s foremost urban centre and hub of national,regional and global social-economic and
        political activities.</p>
        <p class="lead ">
          Lagos is a unique melting point to all Nigerians attracting Africans and Foreigners alike because of its strategic maritime location,large population,big market size,investment opportunities and economic value </p>
        <p class="lead ">
          Lagos is a land of opportunities and possibilities with many diverse tourism destinations
        </p>
        <p class="lead ">Lagos is a land of aquatic beauty and splendor with about 20 beaches in Lekki and Badagry.Lagos has many monuments of different shades .</p>
        <p class="lead ">
          Lagos sightseeing today is one of the Africa’s best with many natural and man made wonders.
        </p>
    </div>
  </section>

@endsection
