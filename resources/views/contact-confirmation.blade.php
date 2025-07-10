@extends('layouts.app')
@section('title', 'Contact Confirmation')

@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5 text-center">
            <h2 class="fw-bolder">Thank you for reaching out!</h2>
            @if($data)
                <p class="lead mt-4">Here is what you submitted:</p>
                <ul class="list-unstyled">
                    <li><strong>Name:</strong> {{ $data->name }}</li>
                    <li><strong>Email:</strong> {{ $data->email }}</li>
                    <li><strong>Phone:</strong> {{ $data->phone }}</li>
                    <li><strong>Message:</strong> {{ $data->message }}</li>
                </ul>
            @else
                <p class="text-danger">No data available.</p>
            @endif
        </div>
    </div>
</section>
@endsection
