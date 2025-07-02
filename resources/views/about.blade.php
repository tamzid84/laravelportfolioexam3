@extends('layouts.app')
@section('title', 'About')


   @section('content') 
    <!-- About Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/about.jpg') }}" alt="About Me" class="img-fluid rounded-circle">
                </div>
                <div class="col-lg-7">
                    <h2 class="display-5 mb-4">About Me</h2>
                    <p class="lead">I'm a passionate web developer with over 15 years of experience creating beautiful and functional websites.</p>
                    <p>My journey in web development began when I was studying computer science at university. Since then, I've worked with numerous clients from various industries, helping them establish their online presence.</p>
                    <p>I specialize in front-end development using modern technologies like HTML5, CSS3, JavaScript, and frameworks like Bootstrap and React. I also have experience with back-end technologies including Node.js and PHP.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Name:</strong> Md Tamzidul Islam</li>
                                <li class="mb-2"><strong>Email:</strong> md.tamzidulislam@ymail.com</li>
                                <li class="mb-2"><strong>Phone:</strong>01715853444</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Experience:</strong> 15+ Years</li>
                                <li class="mb-2"><strong>Location:</strong> Dhaka, Bangladesh</li>
                                <li class="mb-2"><strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Skills</h2>
            <div class="row">
            <?php
                
                foreach($mySkills as $mySkill) 
                {
            
            ?>
                <div class="col-md-6 mb-4">
                    <h5>{{ $mySkill['title'] }}</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 95%">{{ $mySkill['progress'] }}</div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
        </div>
    </section>

    @endsection