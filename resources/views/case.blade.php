<!-- case.blade.php -->

@extends('layouts.app') <!-- Extending the main layout -->

@section('content')
    <header class="case-studies-header">
        <h1>Success Stories from Our Clients</h1>
        <p>See how our data analytics solutions have made a difference for our clients around the world.</p>
    </header>

    <section class="case-studies-container">
        <article class="case-study">
            <h2>Increasing Sales for a US-based Retailer</h2>
            <ul>
                <li><strong>Challenge:</strong> Lack of customer insights.</li>
                <li><strong>Solution:</strong> Implemented custom sales dashboards.</li>
                <li><strong>Results:</strong> 25% increase in quarterly sales.</li>
            </ul>
            <a href="#">Read Full Case Study</a>
        </article>

        <article class="case-study">
            <h2>Improving Healthcare Analytics for a European Clinic</h2>
            <ul>
                <li><strong>Challenge:</strong> Inefficient patient data management.</li>
                <li><strong>Solution:</strong> Built a predictive patient care model.</li>
                <li><strong>Results:</strong> Reduced patient wait time by 30%.</li>
            </ul>
            <a href="#">Read Full Case Study</a>
        </article>
    </section>
@endsection
