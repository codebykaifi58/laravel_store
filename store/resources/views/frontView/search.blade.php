@extends('frontView.layout.app')

@section('content')

    <div class="search-results">
        <!-- Search form will be here (you can include it from the previous form) -->

        @if($products->isEmpty() && $categories->isEmpty())
            <p>No results found for "{{ request('q') }}"</p>
        @else
            @if(!$products->isEmpty())
                <h2>Products</h2>
                <ul>
                    @foreach($products as $product)
                        <li>{{ $product->name }} - ${{ $product->price }}</li>
                    @endforeach
                </ul>
            @endif

            @if(!$categories->isEmpty())
                <h2>Categories</h2>
                <ul>
                    @foreach($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>
@endsection
