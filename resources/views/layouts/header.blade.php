<header>
    <div class="container">
        <img src="{{ asset('images/company-logo.jpeg') }}" alt="Company Logo" class="logo">
        <div class="navbar">
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links" id="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/industries">Industries Served</a></li>
                <li><a href="/case-studies">Case Studies</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
            <a href="/consultation" class="btn-consultation">Get a Free Consultation</a>
        </div>
    </div>
</header>


<!-- Add the script right before the closing body tag -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');
    const consultationBtn = document.querySelector('.btn-consultation');

    hamburger.addEventListener('click', function() {
        // Toggle the active class on nav-links
        navLinks.style.display = navLinks.classList.contains('active') ? 'block' : 'none';

        // Show or hide the consultation button based on the nav-links state
        consultationBtn.style.display = navLinks.classList.contains('active') ? 'block' : 'none';
    });
});

</script>
