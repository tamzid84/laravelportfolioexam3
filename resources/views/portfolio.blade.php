@extends('layouts.app')
@section('title', 'Portfolio')


@section('content')
    <!-- Portfolio Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5">My Portfolio</h2>
                <p class="lead">Here are some of my recent projects</p>
            </div>
            
            <!-- Filter Buttons -->
            <div class="text-center mb-4">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-primary active" data-filter="all">All</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="web">Web Design</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="app">Mobile Apps</button>
                    <button type="button" class="btn btn-outline-primary" data-filter="graphic">Graphic Design</button>
                </div>
            </div>
            
            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="{{ asset('assets/images/project1.jpg') }}" class="card-img-top" alt="E-commerce Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">E-commerce Website</h5>
                                    <p class="text-white">A fully responsive online store with payment integration.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project1Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="app">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="{{ asset('assets/images/project2.jpg') }}" class="card-img-top" alt="Fitness App">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Fitness Tracking App</h5>
                                    <p class="text-white">Mobile application for tracking workouts and nutrition.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project2Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fitness Tracking App</h5>
                            <p class="card-text text-muted">Mobile App</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="{{ asset('assets/images/project3.jpg') }}" class="card-img-top" alt="Corporate Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Corporate Website</h5>
                                    <p class="text-white">Modern website for a financial services company.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project3Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Corporate Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="graphic">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="https://placehold.co/600x400/png" class="card-img-top" alt="Brand Identity">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Brand Identity</h5>
                                    <p class="text-white">Complete branding package for a startup.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project4Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Brand Identity</h5>
                            <p class="card-text text-muted">Graphic Design</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="app">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="https://placehold.co/600x400/png" class="card-img-top" alt="Travel App">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Travel Planner App</h5>
                                    <p class="text-white">Mobile application for planning and booking trips.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project5Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Travel Planner App</h5>
                            <p class="card-text text-muted">Mobile App</p>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="https://placehold.co/600x400/png" class="card-img-top" alt="Restaurant Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Restaurant Website</h5>
                                    <p class="text-white">Online presence for a local restaurant with menu and reservations.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#project6Modal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Restaurant Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="project1Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">E-commerce Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/project1.jpg') }}" class="img-fluid mb-4" alt="E-commerce Website">
                    <p>This project involved creating a fully responsive e-commerce website for a client in the fashion industry. The website features:</p>
                    <ul>
                        <li>Product catalog with filtering options</li>
                        <li>Shopping cart and checkout process</li>
                        <li>Payment gateway integration (Stripe)</li>
                        <li>User account management</li>
                        <li>Admin dashboard for inventory management</li>
                    </ul>
                    <p><strong>Technologies used:</strong> React, Node.js, MongoDB, Stripe API</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 2 -->
    <div class="modal fade" id="project2Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fitness Tracking App</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/project2.jpg" class="img-fluid mb-4" alt="Fitness App">
                    <p>A cross-platform mobile application designed to help users track their workouts, nutrition, and progress toward fitness goals.</p>
                    <p>Key features include:</p>
                    <ul>
                        <li>Custom workout plans</li>
                        <li>Exercise demonstration videos</li>
                        <li>Nutrition tracking with barcode scanner</li>
                        <li>Progress charts and statistics</li>
                        <li>Social features to connect with friends</li>
                    </ul>
                    <p><strong>Technologies used:</strong> React Native, Firebase, Redux</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">View in App Store</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 3 -->
    <div class="modal fade" id="project3Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Corporate Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="images/project3.jpg" class="img-fluid mb-4" alt="Corporate Website">
                    <p>A modern, professional website for a financial services company looking to establish credibility and attract new clients.</p>
                    <p>Project highlights:</p>
                    <ul>
                        <li>Clean, professional design reflecting the company's brand</li>
                        <li>Service pages with detailed information</li>
                        <li>Team member profiles</li>
                        <li>Client portal with secure login</li>
                        <li>Blog section for content marketing</li>
                    </ul>
                    <p><strong>Technologies used:</strong> WordPress, Advanced Custom Fields, CSS3, JavaScript</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 4 -->
    <div class="modal fade" id="project4Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Brand Identity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://source.unsplash.com/random/800x500/?branding" class="img-fluid mb-4" alt="Brand Identity">
                    <p>Complete branding package for a tech startup, including logo design, color palette, typography, and brand guidelines.</p>
                    <p>Deliverables included:</p>
                    <ul>
                        <li>Primary and secondary logo designs</li>
                        <li>Brand color palette with HEX/RGB values</li>
                        <li>Typography system with font pairing recommendations</li>
                        <li>Brand pattern and icon set</li>
                        <li>Comprehensive brand guidelines document</li>
                        <li>Business card and letterhead designs</li>
                    </ul>
                    <p><strong>Tools used:</strong> Adobe Illustrator, Adobe Photoshop, InDesign</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 5 -->
    <div class="modal fade" id="project5Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Travel Planner App</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://source.unsplash.com/random/800x500/?travel" class="img-fluid mb-4" alt="Travel App">
                    <p>Mobile application that helps users plan trips, book accommodations, and discover activities at their destination.</p>
                    <p>Notable features:</p>
                    <ul>
                        <li>Interactive trip planning timeline</li>
                        <li>Integration with booking APIs</li>
                        <li>Offline access to trip details</li>
                        <li>Collaborative planning with travel companions</li>
                        <li>Destination guides with local recommendations</li>
                    </ul>
                    <p><strong>Technologies used:</strong> Flutter, Firebase, Google Maps API</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">View in App Store</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 6 -->
    <div class="modal fade" id="project6Modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Restaurant Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://source.unsplash.com/random/800x500/?restaurant" class="img-fluid mb-4" alt="Restaurant Website">
                    <p>A modern website for a local restaurant showcasing their menu, ambiance, and enabling online reservations.</p>
                    <p>Website features:</p>
                    <ul>
                        <li>Responsive design with mouth-watering food photography</li>
                        <li>Interactive menu with filtering options (vegetarian, gluten-free, etc.)</li>
                        <li>Online reservation system with table availability</li>
                        <li>Gallery showcasing the restaurant's ambiance</li>
                        <li>Integration with delivery services</li>
                    </ul>
                    <p><strong>Technologies used:</strong> HTML5, CSS3, JavaScript, PHP</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
@endsection