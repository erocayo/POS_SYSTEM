<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ url('/pos/login') }}" method="post">
        @csrf

        <label>Username</label>
        <input type="text" name="USERNAME" required>
        <br>
        <label>Password</label>
        <input type="password" name="PASSWORD" required>
        <br>
        <button type="submit">Log In</button>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </form>
</body>
</html>