@extends('layouts.app') <!-- Extending the main layout -->

@section('content')
    <section class="contact-header">
        <h1>Get in Touch with Us</h1>
        <p>We're here to help! Fill out the form below to reach out or use the contact information to get in touch directly.</p>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <h2>Contact Us</h2>
        <form action="#" method="POST" class="contact-form">
            @csrf <!-- Laravel CSRF token -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" id="company" name="company">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <h2>Contact Information</h2>
        <p><strong>Address:</strong> Nairobi, Kenya.</p>
        <p><strong>Phone:</strong> +254-XXX-XXXXXX</p>
        <p><strong>Email:</strong> info@knowellbpo.com</p>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Our Location</h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.0128730389!2d36.821946!3d-1.292066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10a357ab8a67%3A0x8d56f1d8e8c4e42c!2sNairobi!5e0!3m2!1sen!2ske!4v1599999999999!5m2!1sen!2ske"
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Schedule a Call Section -->
    <section class="schedule-call-section">
        <h2>Schedule a Call</h2>
        <a href="https://calendly.com/your-calendar-link" class="btn-schedule">Book a Free Consultation</a>
    </section>
@endsection
