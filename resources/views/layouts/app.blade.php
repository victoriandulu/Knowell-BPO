<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Name')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- Include Header --}}
    @include('layouts.header')

    <div class="content">
        @yield('content')
    </div>

    {{-- Optional Footer --}}
    @include('layouts.footer')

    <button id="scrollToTop" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000; background-color: #0A2342; color: white; border: none; border-radius: 5px; padding: 10px; cursor: pointer;">
        ↑ Up
    </button>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        // Get the button
        const scrollToTopButton = document.getElementById('scrollToTop');

        // Show the button when the user scrolls down 200px from the top of the document
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        };

        // When the user clicks on the button, scroll to the top of the document
        scrollToTopButton.onclick = function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>

    @yield('scripts') <!-- Custom scripts should be yielded here -->
</body>
</html>
