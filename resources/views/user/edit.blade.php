<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit user {{$user->ID}}</title>
</head>
<body>
    <h1>ID: {{$user->ID}}</h1>
    <h1>{{$user->name}}</h1>
    <form action="{{url('user',$user->ID)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{-- the hidden input is mandetory to use PUT method 
        the format is to allowed to be changed --}}
        @csrf
        {{-- this csrf is also mandetory for post method --}}
        <ul style="list-style: none">
            <li>
                <label for="namer">Name:</label>
                <input type="text" name="name" id="namer"
                value="{{$user->name}}"
                >
            </li>
            <li>
                <label for="emailer">Email:</label>
                <input type="email" name="email" id="emailer"
                value="{{$user->email}}"
                >
            </li>
            <li>
                <label for="phoner">Phone:</label>
                <input type="phoner" name="phone" id="phoner"
                value="{{$user->phone}}"
                >
            </li>
            <li>
                <input type="submit" name="submit-botton"
                    value="update"
                id="sumbitter">
            </li>     
        </ul>
    </form>
    <form action="{{url('user',$user->ID)}}" method="post">
        <input type="hidden" name="_method" value="delete">
        @csrf
        <input type="submit" value="delete">
    </form>
</body>
</html>