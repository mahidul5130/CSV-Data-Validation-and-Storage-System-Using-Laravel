@extends('layouts.app')

@section('title', 'User List')

@section('content')
    <div class="container mt-5">
        <h2>User List</h2>

        <form method="GET" action="{{ route('list') }}" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="name" value="{{ request('name') }}" class="form-control" placeholder="Enter name">
                </div>
                <div class="col-md-3">
                    <input type="text" name="email" value="{{ request('email') }}" class="form-control" placeholder="Enter email">
                </div>
                <div class="col-md-3">
                    <input type="text" name="phone_number" value="{{ request('phone_number') }}" class="form-control" placeholder="Enter phone number">
                </div>
                <div class="col-md-2">
                    <select name="gender" class="form-control">
                        <option value="">All</option>
                        <option value="Male" {{ request('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ request('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($filteredUsers as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection