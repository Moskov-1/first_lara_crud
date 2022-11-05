<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @foreach ($users as $user)
        <title>User ID {{$user->ID}}</title>
    @endforeach
    <title>User ID </title>
</head>
<body>
    <h1>DATA : {{$data->ID}}</h1>
    @foreach ($users as $user)    
        <h1><u>{{$user->name}}</u></h1>
        <ol>
            
            <li>
                <span>ID: {{$user->ID}}</span>
            </li>
            <li>
                <span>Name: {{$user->name}}</span>
            </li>
            <li>
                <span>Email: {{$user->email}}</span>
            </li>
            <li>
                <span>Phone: {{$user->phone}}</span>
            </li>
        </ol>
    @endforeach
</body>
</html>