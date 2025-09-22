@extends('backView.layoutback.appback')

@section('title', 'Add Product')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Add New Product</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>

<div class="card">
    <div class="card-body">
     <form action="{{ route('addproductstore') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group mb-3">
        <label for="product_name">Product Name</label>
        <input type="text" id="product_name" name="name" class="form-control" placeholder="Enter product name">
    </div>

    <div class="form-group mb-3">
        <label for="category">Category</label>
        <select id="category" name="category" class="form-control">
            <option value="">Select Category</option>
            @foreach($MyCategory as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="price">Price ($)</label>
        <input type="number" id="price" name="price" class="form-control" placeholder="Enter price">
    </div>

    <div class="form-group mb-3">
        <label for="stock">Stock Quantity</label>
        <input type="number" id="stock" name="quantity" class="form-control" placeholder="Enter stock quantity">
    </div>

    <div class="form-group mb-3">
        <label for="product_image">Product Image</label>
        <input type="file" id="product_image" name="image" class="form-control">
    </div>

    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea id="description" name="discription" class="form-control" rows="4" placeholder="Enter product description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save Product</button>
</form>


    </div>
    
</div>
@endsection
