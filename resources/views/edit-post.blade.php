<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="header-text">Edit Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('post.edit', ['company' => $company->id])}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name :</label>
                                <input type="text" name="name" class="form-control" value="{{$company->name}}" placeholder="Enter Your Name"/>
                            </div>
        
                            <div class="mb-3">
                                <label for="">Gmail :</label>
                                <input type="gmail" name="gmail" class="form-control" value="{{$company->email}}" placeholder="Enter Your Email"/>
                            </div>
        
                            <div class="mb-3">
                                <label for="">Address :</label>
                                <input type="text" name="address" class="form-control" value="{{$company->address}}" placeholder="Enter Your Address"/>
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