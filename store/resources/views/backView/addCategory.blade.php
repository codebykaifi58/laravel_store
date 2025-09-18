@extends('backView.layoutback.appback')

@section('title', 'Add Category')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Add New Category</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>

<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" class="form-control" placeholder="Enter category name">
            </div>

            <div class="form-group mb-3">
                <label for="description">Description (Optional)</label>
                <textarea id="description" class="form-control" rows="3" placeholder="Enter category description"></textarea>
            </div>

            <button type="button" class="btn btn-primary">Save Category</button>
        </form>
    </div>
</div>
@endsection
