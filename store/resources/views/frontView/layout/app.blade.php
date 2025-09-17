<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Store Website </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNavbar" style="box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.5);">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">My Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>





  <div class="container my-5 d-flex flex-column min-vh-100 justify-content-center align-items-center">
    @yield('content')
  </div>

  <!-- footer -->
  <footer class="bg-dark text-white py-3 mt-auto">
      <div class="container text-center">
          &copy; {{ date('Y') }} My Store. All rights reserved.
      </div>
  </footer>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.getElementById('mainNavbar');
  let scrollState = 'top'; // "top", "hidden", "shown"
  let lastScrollTop = 0;

  window.addEventListener('scroll', function () {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    // Step 1: Hide navbar when scroll > 50px
    if (currentScroll > 50 && currentScroll <= 100 && scrollState !== 'hidden') {
      navbar.classList.add('hidden');
      navbar.classList.remove('show-again');
      scrollState = 'hidden';
    }

    // Step 2: Show navbar with animation when scroll > 100px
    if (currentScroll > 100 && scrollState !== 'shown') {
      navbar.classList.remove('hidden');
      navbar.classList.add('show-again');
      scrollState = 'shown';
    }

    // Step 3: Reset when user goes back to top
    if (currentScroll <= 50 && scrollState !== 'top') {
      navbar.classList.remove('hidden', 'show-again');
      scrollState = 'top';
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
  });
});
document.addEventListener("scroll", function () {
  const video = document.querySelector(".video-hero video");
  const heroSection = document.getElementById("videoHero");

  // Jitna scroll kare utna check kare
  let scrollPosition = window.scrollY;

  // Jab video section ke neeche scroll ho jaye, video ko fixed se hata de
  if (scrollPosition > heroSection.offsetHeight - 50) {
    video.style.position = "absolute";
    video.style.top = "0";
  } else {
    video.style.position = "fixed";
  }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
