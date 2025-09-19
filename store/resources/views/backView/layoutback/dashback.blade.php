@extends('backView.layoutback.appback')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <p class="card-text display-4"> 0 </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text display-4"> 0 </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text display-4"> 0 </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Customers</h5>
                    <p class="card-text display-4">  0 </p>
                </div>
            </div>
        </div>
    </div>

    <!-- مزید sections جیسے charts, latest orders list وغیرہ -->
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">Recent Orders</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>id</td>
                            <td>customer</td>
                            <td>total </td>
                            <td>status</td>
                            <td>created</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">Top Products</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">productname<span class="badge badge-primary float-right">productsales_count</span></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
