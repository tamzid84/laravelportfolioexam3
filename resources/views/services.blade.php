@extends('layouts.app')
@section('title', 'Services')


@section('content')
        <!-- Services Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5">My Services</h2>
                <p class="lead">I offer a range of professional services to help your business grow online.</p>
            </div>
            <div class="row g-4">
            <?php
                
                foreach($myServices as $myService) 
                {
            
            ?>
                <div class="col-md-4">

              
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="{{ $myService['icon'] }}"></i>
                            </div>
                            <h5 class="card-title">{{ $myService['title'] }}</h5>
                            <p class="card-text">{{ $myService['short_description'] }}</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> {{ $myService['service1'] }}</li>
                                <li><i class="fas fa-check text-primary me-2"></i> {{ $myService['service2'] }}</li>
                                <li><i class="fas fa-check text-primary me-2"></i> {{ $myService['service3'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Client Testimonials</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"John transformed our outdated website into a modern, user-friendly platform that has significantly increased our online sales. His attention to detail and communication throughout the project were exceptional."</p>
                                        <h5 class="mb-1">Sarah Johnson</h5>
                                        <p class="text-muted">CEO, TechSolutions Inc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"Working with John on our mobile app was a great experience. He delivered the project on time and within budget, and the final product exceeded our expectations. We've already seen a 40% increase in user engagement."</p>
                                        <h5 class="mb-1">Michael Chen</h5>
                                        <p class="text-muted">Founder, AppVenture</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">"John's SEO expertise helped our small business rank on the first page of Google for several competitive keywords. Our website traffic has tripled, and we're getting more qualified leads than ever before."</p>
                                        <h5 class="mb-1">Emily Rodriguez</h5>
                                        <p class="text-muted">Marketing Director, GreenLeaf Organics</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection