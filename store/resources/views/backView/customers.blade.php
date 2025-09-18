@extends('backView.layoutback.appback')

@section('title', 'Customers')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Customers</h1>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Registered Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>501</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>+123456789</td>
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
