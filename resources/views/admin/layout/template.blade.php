<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Selamat Datang, {{auth()->user()->username}}</a>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bxs-user-circle user-icon' style="font-size: 3rem"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/dashboard')}}"> <i class='bx bxs-dashboard'></i> Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{url('/galery-admin')}}"><i class='bx bx-image' ></i> Galery</a></li>
                  <li>
                    <form action="{{url('/logout')}}" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"> <i class='bx bx-log-out'></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
        </div>
      </nav>

@yield('content')
        <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>