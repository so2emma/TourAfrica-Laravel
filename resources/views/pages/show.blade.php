@extends('layouts.app')

@section('title', 'Destinations Page')

@section('destination', 'active')

@section('content')

<!-- SHOWCASE AREA  -->
<div class="banner-image w-100 vh-150 d-flex justify-content-center align-items-center mb-5 grad">
    <div class="text-center text-light">
        <h1 class="display-2">
            {{ $destination->destination }}
        </h1>
    </div>
</div>

{{-- CAROUSEL --}}
<section id="display" class="py-5">
    <div class="container">

        <div id="carouselExampleControls" class="carousel slide w-50 m-auto" data-bs-ride="carousel">
            <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="/cover/{{ $destination->cover }}" class="d-block w-100" alt="...">
            </div>

              @foreach ($destination->images as $img )
              <div class="carousel-item">
                <img src="/images/{{ $img->image }}" class="d-block w-100" style="max-height: 300px" alt="...">
              </div>
              @endforeach


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</section>

{{-- Description of the location  --}}

<section class="py-5">
    <div class="container text-center">
        <p class="lead fs-3">
            {{ $destination->description }}
        </p>

        <a href="{{ route('pages.booking')}}" class="btn btn-primary text-white">
        Book Now
        </a>
    </div>
</section>

@endsection
