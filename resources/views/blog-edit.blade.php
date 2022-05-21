<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="header-text">Edit Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blog-edit', ['blog' => $blog->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title :</label>
                                <input type="text" name="title" class="form-control" value="{{ $blog->title }}"/>
                            </div>
        
                            <div class="mb-3">
                                <label for="">Description :</label>
                                <input type="text" name="description" class="form-control" value="{{ $blog->description }}"/>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>