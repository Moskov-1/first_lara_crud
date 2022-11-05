<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add users</title>
</head>
<body>
    <h1>Add a user</h1>
    <form action="{{url('user')}}" method="post">
        @csrf
        <ul style="list-style: none">
            <li>
                <label for="namer">Name:</label>
                <input type="text" name="name" id="namer">
            </li>
            <li>
                <label for="emailer">Email:</label>
                <input type="email" name="email" id="emailer">
            </li>
            <li>
                <label for="phoner">Phone:</label>
                <input type="phoner" name="phone" id="phoner">
            </li>
            <li>
                <input type="submit" name="submit-botton"
                    value="submit"
                id="sumbitter">
            </li>     
        </ul>
    </form>
</body>
</html>