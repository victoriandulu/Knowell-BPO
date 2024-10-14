
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="hero-section" style="background-image: url('{{ asset('images/map.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
        <div class="overlay">
            <div class="hero-content">
                <h1>Empower Your Business with Data-Driven Insights – Anytime, Anywhere.</h1>
                <p>Cost-effective, expert data analytics teams for 24/7 support and insights.</p>
                <a href="/consultation" class="cta-button">Start Your Data Journey Today</a>
            </div>
        </div>
    </div>
@endsection
