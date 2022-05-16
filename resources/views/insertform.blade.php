<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h1>Insert Data<h1> 
    <form action="submit" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name"/><br>
        <input type="text" name="address" placeholder="Enter Your Address"/><br>
        <input type="gmail" name="gmail" placeholder="Enter Your Email"/><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>