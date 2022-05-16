<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    <form action="{{route('post.add')}}" method="POST">
        @csrf
        Name : <br><input type="text" name="name" placeholder="Enter Your Name"/><br><br>
        Gmail : <br><input type="gmail" name="gmail" placeholder="Enter Your Email"/><br><br>
        Address : <br><input type="text" name="address" placeholder="Enter Your Address"/><br><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>