@extends('layouts.app')

@section('title', 'Contact Page')

@section('contact', 'active')

@section('content')

    <!-- SHOWCASE AREA  -->
    <div class="banner-image w-100 vh-150 d-flex justify-content-center align-items-center mb-5 grad">
        <div class="text-center text-light">
            <h1>
                Contact Us
            </h1>
            <p class="">Do you have any question or contribution? </p>
            <div class="">
                <a href="booking.html" class="btn btn-outline-light ">Tour Booking</a>
                <a href="index.html" class="btn btn-outline-light ">About Us</a>
            </div>
        </div>
    </div>
    <!-- CONTACT SECTION  -->
    <section id="contact" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <h4>Get In Touch</h4>
                            <p>Reach out to us we would love to hear from you</p>
                            <h4>Address</h4>
                            <p>C24, Grace Court Estate, Yaba, Lagos</p>
                            <h4>Email</h4>
                            <p>osoemmanuel@outlook.com</p>
                            <h4>Phone</h4>
                            <p>08033520140</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card p-4">
                        <div class="card-body">
                            <h3 class="text-center">Please fill out the form to contact us</h3>
                            <hr>
                            @if (session('status'))
                            <div class="alert alert-success text-center">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form action="/store/contact" method="post">
                                @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname') }}">
                                        @error('firstname')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ old('lastname') }}">
                                        @error('lastname')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea type="text" name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="alert alert-danger m-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="form-group d-grid">
                                        <button type="submit" class="btn btn-outline-danger mt-3">Submit</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
