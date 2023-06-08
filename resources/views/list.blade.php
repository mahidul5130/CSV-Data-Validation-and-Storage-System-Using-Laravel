<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
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
            @foreach($users as $user)
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