@extends('backView.layoutback.appback')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Products</h1>
    <a href="{{ route('products.add') }}" class="btn btn-primary">Add Product</a>
</div>

<div class="card mb-4">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->categoryRelation->name ?? 'No Category' }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <!-- Edit/Delete buttons disabled -->
                            <button class="btn btn-sm btn-warning" disabled>Edit</button>
                            <button class="btn btn-sm btn-danger" disabled>Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Product Cards Section -->
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mb-4">
<div class="card" style="width: 14rem; margin-bottom: 20px;">
    @if($product->image)
        <div style="height: 180px; overflow: hidden;">
            <img src="{{ asset('storage/' . $product->image) }}" 
                 alt="{{ $product->name }}" 
                 style="width: 100%; height: 100%; object-fit: cover;">
        </div>
    @endif
    <div class="card-body" style="padding: 0.5rem;">
        <h5 class="card-title" style="font-size: 1rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            {{ $product->name }}
        </h5>
        <p class="card-text" style="font-size: 0.85rem; margin: 0;">
            Category: {{ $product->categoryRelation->name ?? 'No Category' }}
        </p>
        <p class="card-text" style="font-size: 0.85rem; margin: 0;">
            Price: ${{ $product->price }}
        </p>
        <p class="card-text" style="font-size: 0.85rem; margin: 0;">
            Stock: {{ $product->quantity }}
        </p>
    </div>
</div>



    </div>
    @endforeach
</div>
@endsection
