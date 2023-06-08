<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>

    <form method="GET" action="{{ route('list') }}">
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ request('name') }}" placeholder="Enter name">

        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ request('email') }}" placeholder="Enter email">

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="{{ request('phone_number') }}" placeholder="Enter phone number">

        <label for="gender">Gender:</label>
        <select name="gender">
            <option value="">All</option>
            <option value="Male" {{ request('gender') === 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ request('gender') === 'Female' ? 'selected' : '' }}>Female</option>
        </select>

        <button type="submit">Filter</button>
    </form>


    <table>
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
</body>
</html>