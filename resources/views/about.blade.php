@extends('layouts.app') <!-- Extending the main layout -->

@section('content')
    <header class="about-header">
        <h1>About Knowell BPO</h1>
        <p>Knowell BPO, a leader in data analytics outsourcing, has been transforming data into actionable insights since 2006.</p>
    </header>

    <section class="mission-section">
        <h2>Our Mission</h2>
        <p>To empower businesses through data, delivering insights that lead to smarter decisions and sustainable growth.</p>
    </section>

    <section class="why-choose-section">
        <h2>Why Choose Knowell BPO?</h2>
        <ul>
            <li>Expertise in data science and analytics.</li>
            <li>Proven track record since 2006.</li>
            <li>Focus on client satisfaction.</li>
        </ul>
    </section>

    <section class="team-section">
        <h2>Meet the Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="images/nelson.jpg" alt="Team Member 1" class="team-photo">
                <h3>John Doe</h3>
                <p>CEO & Founder</p>
            </div>
            <div class="team-member">
                <img src="images/nelson.jpg" alt="Team Member 2" class="team-photo">
                <h3>Jane Smith</h3>
                <p>Chief Data Scientist</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </section>

    <section class="values-section">
        <h2>Our Values</h2>
        <ul>
            <li>Client-centric approach</li>
            <li>Innovation</li>
            <li>Transparency</li>
            <li>Excellence</li>
        </ul>
    </section>
@endsection
