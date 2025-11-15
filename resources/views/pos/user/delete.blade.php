<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    Are you sure you want to delete the user "{{$userlist[0]->USERNAME}}"?
    <br>
    <a href="{{ url('/pos/user/'.$userlist[0]->USER_ID.'/destroy') }}">Yes</a>
    <a href="{{ url('/pos/user')}}">No</a>
</body>
</html>