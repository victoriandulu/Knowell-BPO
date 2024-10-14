@extends('layouts.app')

@section('title', 'Industries We Serve')

@section('content')
    <!-- Intro Section -->
    <section class="industries-section">
        <h1>Industries We Serve</h1>
        <p>From finance to e-commerce, Knowell BPO serves a wide range of industries with specialized data analytics solutions.</p>
    </section>


    <section class="industries-overview">
        <h2>Industries</h2>
        <div class="industry-container">

            <div class="industry-card">
                <h3>Finance</h3>
                <p>Risk analysis, financial forecasting, fraud detection.</p>
            </div>

            <div class="industry-card">
                <h3>Healthcare</h3>
                <p>Patient analytics, healthcare data management, predictive patient care.</p>
            </div>


            <div class="industry-card">
                <h3>E-commerce</h3>
                <p>Customer segmentation, sales trend analysis, inventory optimization.</p>
            </div>

            <div class="industry-card">
                <h3>Manufacturing</h3>
                <p>Supply chain analytics, quality control analysis, operational efficiency.</p>
            </div>

            <div class="industry-card">
                <h3>Retail</h3>
                <p>Market basket analysis, customer sentiment analysis, sales forecasting.</p>
            </div>
        </div>
    </section>

    <section class="case-studies-cta">
        <a href="{{ url('/case-studies') }}" class="cta-button">See How We’ve Helped Businesses Like Yours</a>
    </section>
@endsection

@section('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
