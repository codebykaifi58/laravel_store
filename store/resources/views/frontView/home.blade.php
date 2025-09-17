@extends('frontView.layout.app')

@section('content')

<!-- Hero Section with Fixed Video -->
<section class="video-hero" id="videoHero">
  <video autoplay muted loop>
    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Centered Overlay Content -->
  <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae.</p>

    <!-- Search Form -->
    <form action="https://www.google.com/search" method="get" target="_blank">
      <input type="text" name="q" placeholder="Search Google...">
      <button type="submit" class="search-btn">Search</button>
    </form>
  </div> 
</section>

<!-- Products Section -->
<section class="products-section">
  <div class="container">
    <h2 class="mb-4 text-center">Our Products</h2>
    <div class="row justify-content-center">
        @for ($i = 1; $i <= 12; $i++)
        <div class="col-6 col-md-3 col-lg-2 mb-4">
            <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/product' . $i . '.webp') }}" class="card-img-top" alt="Product {{ $i }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Product {{ $i }}</h5>
                <p class="card-text flex-grow-1">Short description for product {{ $i }}.</p>
                <strong class="text-primary mb-2">${{ 10 + ($i * 10) - 0.01 }}</strong>
                <a href="#" class="btn btn-outline-primary mt-auto">View Details</a>
            </div>
            </div>  
        </div>
        @endfor

    </div>
  </div>
</section>

@endsection
