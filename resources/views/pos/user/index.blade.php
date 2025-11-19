<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Index</title>
</head>
<body>
    
    @if(empty($userlist))
    No User in the  Database
    
    @else
@if(session('greeting'))
    <p>{{ session('greeting') }}</p>
@endif
<table>
        <thread>
            <th>User Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password Hash</th>
            <th>Role Id</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Admin Id</th>
            <th>Action</th>
        </thread>
        <tbody>
            @foreach ($userlist as $user)
                <tr>
                    <td>{{$user->USER_ID}}</td>
                    <td>{{$user->FIRST_NAME}} {{$user->LAST_NAME}}</td>
                    <td>{{$user->USERNAME}}</td>
                    <td>{{$user->PASSWORD_HASH}}</td>
                    <td>{{$user->ROLE_ID}}</td>
                    <td>{{$user->ADDRESS}}</td>
                    <td>{{$user->CONTACT_NUMBER}}</td>
                    <td>{{$user->ADMIN_ID}}</td>
                    <td><a href="{{url('/pos/user/' . $user->USER_ID . '/edit')}}">Edit</a> |
                    <a href="{{url('/pos/user/' . $user->USER_ID . '/delete')}}">Delele</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
        @endif
        <br>
        <a href="{{url('/pos/user/add')}}">Add User</a>
        <br>
        <form action="{{ url('/pos/logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>