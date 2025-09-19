@extends('backView.layoutback.appback')

@section('title', 'Add Category')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Add New Category</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('addCategorystore')}}">
            @csrf
            <div class="form-group mb-3">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" name="CategoryAdd" class="form-control" placeholder="Enter category name">
            </div>
            <button type="submit" class="btn btn-primary">Save Category</button>
        </form>
    </div>
</div>
@include('FlashMessage');

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="categoryTableBody">
      <!-- Example row -->
       @foreach($MyCategory as $MyCategory)
      <tr>

        <td>{{$MyCategory->id}}</td>
        <td>{{$MyCategory->name}}</td>
        <td>{{$MyCategory->created_at}}</td>
        <td>{{$MyCategory->updated_at}}</td>
        
        <td>
          <button class="btn btn-sm btn-warning">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection
