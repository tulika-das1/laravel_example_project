<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            text-align: center;
            padding: 8px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>{{Auth::user()->id}}</td>
            <td>{{Auth::user()->name}}</td>
            <td>{{Auth::user()->email}}</td>
            <td>
                <a href="logout">Logout</a>
            </td>
        </tr>
    </table>
</body>
</html>