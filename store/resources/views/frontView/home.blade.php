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
    <form action="{{ route('search.products') }}" method="GET" target="" class="search-form" autocomplete="off">
    <div class="search-wrapper">
        <!-- Input -->
        <input type="text" id="searchInput" name="q" placeholder="Search Products..." value="{{ request('q') }}">
        <!-- Button -->
        <button type="submit" class="search-btn">Search</button>

        <!-- Dropdown Suggestions -->
        <ul id="searchDropdown" class="dropdown-list hidden">
            @foreach($MyCategory as $category)
                <li style="color:black">{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>
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
          <div class="card h-100" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
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

<!-- Script -->
<script>
  const searchInput = document.getElementById('searchInput');
  const dropdown = document.getElementById('searchDropdown');

  // Show dropdown when input is focused
  searchInput.addEventListener('focus', () => {
    dropdown.classList.remove('hidden');
  });

  // Hide dropdown when clicking outside
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.search-wrapper')) {
      dropdown.classList.add('hidden');
    }
  });

  // Fill input with clicked dropdown item
  dropdown.addEventListener('click', (e) => {
    if (e.target.tagName === 'LI') {
      searchInput.value = e.target.textContent;
      dropdown.classList.add('hidden');
    }
  });


  $(document).ready(function () {
    $('#searchInput').on('input', function () {
        let query = $(this).val();
        if (query.length > 2) { // Trigger after 2 or 3 characters
            $.get("{{ route('search.products') }}", { q: query }, function (data) {
                $('#searchDropdown').removeClass('hidden').empty();
                // Populate suggestions
                if (data.categories.length > 0) {
                    data.categories.forEach(function (category) {
                        $('#searchDropdown').append('<li>' + category.name + '</li>');
                    });
                }
            });
        } else {
            $('#searchDropdown').addClass('hidden');
        }
    });

    // Hide dropdown when clicking outside
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.search-wrapper').length) {
            $('#searchDropdown').addClass('hidden');
        }
    });
});

</script>

@endsection
