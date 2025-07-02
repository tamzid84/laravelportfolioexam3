@extends('layouts.app')
@section('title', 'Home')


@section('content')
    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white fw-bold">Hi, I'm Tamzid</h1>
                    <p class="lead text-white">Professional Web Developer & Designer</p>
                    <a href="{{ route('portfolio') }}" class="btn btn-primary btn-lg mt-3">View My Work</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Work -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Work</h2>
            <div class="row">

                <?php
                
                    foreach($featuredWorks as $featuredWork) 
                    {
                
                ?>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $featuredWork['image'] }}" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $featuredWork['title'] }}</h5>
                            <p class="card-text">{{ $featuredWork['short_description'] }}</p>
                            <a href="{{ route('portfolio') }}" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>


                <?php } ?>

            </div>
        </div>
    </section>
@endsection