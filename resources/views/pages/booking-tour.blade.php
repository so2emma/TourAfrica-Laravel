@extends('layouts.app')

@section('title', 'Booking Page')

@section('booking', 'active')

@section('content')

    <!-- SHOWCASE AREA  -->
    <div class="banner-image w-100 vh-150 d-flex justify-content-center align-items-center mb-5 grad">
        <div class="text-center text-light">
            <h1>
                Register your booking option.
            </h1>
            <p class="">Select your booking option and start your journey</p>
        </div>
    </div>
    <!-- PAYMENT SECTION  -->
    <section id="booking-registration" class="py-3">
        <div class="container">
            <div class="row">

            </div>
    </section>

    <!-- Tour booking  -->
    <section id="booking" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="card p-4">
                        <div class="card-body">
                            <h3 class="text-center">Please fill out the form to Book Your Tour</h3>
                            <hr>
                            @if (session('status'))
                                <div class="alert alert-success text-center">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="/store/booking" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control"
                                                placeholder="First Name" value="{{ old('firstname') }}">
                                            @error('firstname')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control"
                                                placeholder="Last Name" value="{{ old('lastname') }}">
                                            @error('lastname')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Phone Number" value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea type="text" name="address" class="form-control"
                                            placeholder="Pick Up Address">{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3 pt-3">
                                        <div class="form-group">
                                            <label for="proposed" class="form-label fw-bold text-primary-color"> Tour Date
                                            </label>
                                            <input type="date" name="date" class="form-control" placeholder="Tour Date" value="{{ old('date') }}">
                                            @error('date')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control"
                                                placeholder="Number of tourist" value="{{ old('number') }}">

                                                @error('number')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <select name="package" id="" class="form-select form-select-lg" value="{{ old('package') }}">
                                                <option value="" selected="selected">Select Package</option>
                                                <option value="Royal Standard">Royal Standard</option>
                                                <option value="Royal Executive">Royal Executive</option>
                                                <option value="Presidential Executive">Presidential Executive</option>
                                            </select>
                                            @error('package')
                                                <div class="alert alert-danger m-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col mb-3">
                                    <div class="form-group d-grid">
                                        <button type="submit" class="btn btn-outline-danger mt-3">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-8 py-5">
                    <form method="POST">
                        <div class="row">
                            <div class="alert-success text-center mb-3" role="alert">
                            </div>

                            <div class="mb-3">
                                <input type="text" name="company" value="" class="form-control form-control-lg mb-resp"
                                    placeholder="Name of Organization/Individual ">
                            </div>
                            <div class="alert-danger" role="alert">
                            </div>

                            <div class="mb-3">
                                <input type="text" name="telephone" value="" class="form-control form-control-lg mb-resp"
                                    placeholder="Contact Telephone">
                            </div>
                            <div class="alert-danger" role="alert">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="address" value="" class="form-control form-control-lg mb-resp"
                                    placeholder="Contact Address">
                            </div>
                            <div class="alert-danger" role="alert">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" value="" class="form-control form-control-lg md-resp"
                                    placeholder="Email Address">
                            </div>
                            <div class="alert-danger" role="alert">
                            </div>
                            <div class="mb-3">
                                <select name="job" id="" class="form-select form-select-lg">
                                    <option value="" selected="selected">Job description</option>
                                    <option value="installation">Installation</option>
                                    <option value="repair">Repair</option>
                                    <option value="servicing">Servicing</option>

                                </select>

                            </div>
                            <div class="alert-danger" role="alert">
                            </div>
                            <div class="mb-3">
                                <label for="proposed" class="form-label fw-bold text-primary-color"> Proposed Date</label>
                                <input type="date" name="date" class="form-control form-control-lg md-resp"
                                    placeholder="Propose Date">
                            </div>
                            <div class="alert-danger" role="alert">
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">BOOK
                                    NOW</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>

@endsection
