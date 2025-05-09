<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    body, html {
      height: 100%;
    }
    .login-container {
      height: 100%;
    }
  </style>    
<title>Login</title>
</head>
<body>
    <div class="container login-container d-flex justify-content-center align-items-center">
        <div class="card p-5 shadow-sm" style="min-width: 300px; max-width: 400px; width: 100%;">
          <h4 class="text-center mb-5">Login</h4>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                <li>{{$item}}</li>   
                @endforeach
            </ul>
          </div>  
          @endif
        <form action="{{route ('login.post')}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-2 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>