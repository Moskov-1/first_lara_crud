<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Users Summary</h1>
    <a href="{{url('user/create')}}">add users here &#8594;</a><br><br>
    <a href="create">Use this. This one is a better link &#8594;</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
            <th>profile</th>
            <th>change</th>
            <th>delete</th>
        </tr> 
        @foreach ($user_data as $user)
        <tr>
            <td>{{$user->ID}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="/user/{{$user->ID}}">view</a></td>
            {{-- <td><a href="{{url('user',$user->ID)}}">view</a></td> --}}
            <td><a href="{{url('user',[$user->ID,'edit'])}}">edit</a></td>
            <td>             
                <form action="{{url('user',$user->ID)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                    <input type="submit" name="sumbit" value="delete">
                </form>
            </td>
        </tr>   
        @endforeach
    </table>
    <form action="{{url('user/create')}}" method="get">
        <label for="goto_er">ADD UERS:  </label>
        <button type="submit" id="goto_er">ADD</button>
    </form>
</body>
</html>