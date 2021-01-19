<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    @foreach($users as $user)
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            {{$user->name}} <input type="submit" value='Follow'>
        </form>
    @endforeach
</body>
</html>
