<footer class="footer">
    <div class="footer-container">
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/industries">Industries Served</a></li>
                <li><a href="/case-studies">Case Studies</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>

        <div class="social-media">
            <h3>Follow Us</h3>
            <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
            <a href="#"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
            <a href="#"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn"></a>
        </div>

        <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Email: info@yourcompany.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>

        <div class="newsletter">
            <h3>Sign Up for Our Newsletter</h3>
            <form action="/subscribe" method="POST">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
</footer>
