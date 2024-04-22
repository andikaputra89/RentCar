<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="asset/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
<body>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title text-center">Login</h3>
              <hr>
              @if (session('loginError'))
              <div class="alert alert-danger mt-3">
                  {{session('loginError')}}
              </div>
            @endif
              <form action="{{url('/login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" id="username" autofocus required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Login</button>
                  </div>
              </form>
            </div>
          </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js""></script>
  </body>
</html>
</body>
</html>