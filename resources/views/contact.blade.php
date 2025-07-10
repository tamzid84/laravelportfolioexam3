@extends('layouts.app')
@section('title', 'Contact')


@section('content')
        <!-- Contact Section -->
    <!-- Page content-->
    <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form method="POST" action="{{ route('contact.submit') }}">
    @csrf
    <!-- Name input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
        <label for="name">Full name</label>
    </div>
    <!-- Email input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
        <label for="email">Email address</label>
    </div>
    <!-- Phone input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
        <label for="phone">Phone number</label>
    </div>
    <!-- Message input -->
    <div class="form-floating mb-3">
        <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
        <label for="message">Message</label>
    </div>
    <!-- Submit -->
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </div>
</form>

<!-- Success Message -->
@if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection