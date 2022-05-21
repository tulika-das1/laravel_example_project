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
    <a style="float:right" href="{{ route('blog') }}">Add Post</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->user->name }}</td>
            <td>
                <a href="{{ route('blog-edit', ['blog' => $blog->id]) }}">Edit</a> |
                <a href="{{ route('blog-delete', ['blog' => $blog->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>