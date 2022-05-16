<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post List</title>
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
    <a style="float:right" href="{{route('post.add')}}">Add Post</a>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>Action</th>
        </tr>
        @foreach($companies as $company)
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->address}}</td>
            <td>
                <a href="{{ route('post.edit', ['company' => $company->id]) }}">Edit</a> |
                <a href="{{ route('post.delete', ['id' => $company->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>