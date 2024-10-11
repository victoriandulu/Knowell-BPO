<header>
    <div class="main-header">
        <div class="container">
            <img src="{{ asset('images/company-logo.jpeg') }}" alt="Company Logo" class="logo">
            <button class="hamburger" id="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="navbar">
                <ul class="nav-links" id="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/industries">Industries Served</a></li>
                    <li><a href="/case">Case Studies</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
                <a href="/consultation" class="btn-consultation">Get a Free Consultation</a>
            </div>
        </div>
    </div>
</header>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const container = document.querySelector('.container');

    hamburger.addEventListener('click', function() {
        // Toggle the active class on the container
        container.classList.toggle('active');
        // Toggle the 'open' class on the hamburger icon
        hamburger.classList.toggle('open');
    });
});


</script>
