@extends('layouts.app')

@section('title', 'Destinations Page')

@section('destination', 'active')

@section('content')
    <!-- SHOWCASE AREA  -->
    <div class="banner-image w-100 vh-150 d-flex justify-content-center align-items-center mb-5 grad">
        <div class="text-center text-light">
            <h1>
                All Our Available Destinations
            </h1>
            <p class="">Pick the destination of your dreams.. </p>
            <div class="">
                <a href="booking.html" class="btn btn-outline-light ">Tour Booking</a> <a href="booking.html"
                    class="btn btn-outline-light ">About Us</a>
            </div>
        </div>
    </div>

    <!-- Destinations -->
    <section id="destination" class="py-5  ">
        <div class="container-lg">
            <div class="row justify-content-stretched  g-3">

                <div class="header p-4 text-center">
                    <h2><i class="fa fa-paper-plane "></i> Explore MainLand</h2>
                </div>
                {{-- code section  --}}
                @forelse ( $destinations as $key => $destination )
                @if ($destination->location == "mainland")
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretched ">
                    <div class="card">
                        <img src="cover/{{ $destination->cover }}" class="card-img-top" alt="...">
                        <div class="card-body py-5 text-center ">
                            <h5 class="card-title fw-bold pb-2">{{ $destination->destination }}</h5>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                @endif

                @empty
                    No destinations Available
                @endforelse
                {{-- end of section  --}}

                <div class="header p-4 text-center">
                    <h2><i class="fa fa-paper-plane "></i> Explore Lekki</h2>
                </div>

                {{-- code section  --}}
                @forelse ( $destinations as $key => $destination )
                @if ($destination->location == "lekki")
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretched">
                    <div class="card">
                        <img src="cover/{{ $destination->cover }}" class="card-img-top" alt="...">
                        <div class="card-body py-5 text-center ">
                            <h5 class="card-title fw-bold pb-2">{{ $destination->destination }}</h5>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                @endif

                @empty
                    No destinations Available
                @endforelse
                {{-- end of section  --}}


                <div class="header p-4 text-center">
                    <h2><i class="fa fa-paper-plane "></i>  Explore Ibeju-Lekki</h2>
                </div>
                {{-- code section  --}}
                @forelse ( $destinations as $key => $destination )
                @if ($destination->location == "ibeju-lekki")
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretched ">
                    <div class="card">
                        <img src="cover/{{ $destination->cover }}" class="card-img-top" alt="...">
                        <div class="card-body py-5 text-center ">
                            <h5 class="card-title fw-bold pb-2">{{ $destination->destination }}</h5>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                @endif

                @empty
                    No destinations Available
                @endforelse
                {{-- end of section  --}}
                <div class="header p-4 text-center">
                    <h2><i class="fa fa-paper-plane "></i> Explore Badagry</h2>
                </div>
                {{-- code section  --}}
                @forelse ( $destinations as $key => $destination )
                @if ($destination->location == "badagry")
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretched ">
                    <div class="card">
                        <img src="cover/{{ $destination->cover }}" class="card-img-top" alt="...">
                        <div class="card-body py-5 text-center ">
                            <h5 class="card-title fw-bold pb-2">{{ $destination->destination }}</h5>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                @endif

                @empty
                    No destinations Available
                @endforelse
                {{-- end of section  --}}
                <div class="header p-4 text-center">
                    <h2><i class="fa fa-paper-plane "></i> Explore Lagos Island</h2>
                </div>

                {{-- code section  --}}
                @forelse ( $destinations as $key => $destination )
                @if ($destination->location == "lagos-island")
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretched">
                    <div class="card">
                        <img src="cover/{{ $destination->cover }}" class="card-img-top" alt="...">
                        <div class="card-body py-5 text-center ">
                            <h5 class="card-title fw-bold pb-2">{{ $destination->destination }}</h5>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                @endif

                @empty
                    No destinations Available
                @endforelse
                {{-- end of section  --}}
            </div>

        </div>
        </div>
    </section>
@endsection
