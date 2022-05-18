<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{route('login-user')}}" method="POST">
                
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
                @endif
                
                @csrf

                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in with</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                 <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="email" value="{{ old('email') }}"/>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password"/>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
      
                <div class="mx-4 mb-3 mb-lg-4">
                  <button type="submit" class="btn btn-warning btn-lg">login</button>
                </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/registration"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>