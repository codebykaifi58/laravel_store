@extends('backView.layoutback.appback')

@section('title', 'Orders')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Orders</h1>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>101</td>
                    <td>John Doe</td>
                    <td>$120</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td>2025-09-18</td>
                    <td>
                        <button class="btn btn-sm btn-info">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
