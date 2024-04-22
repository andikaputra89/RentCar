<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <div class="container p-0">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('asset/img/logo.png')}}" alt="Logo" width="200" height="150">
                  </a>
              <div class="d-flex flex-column me-5">
                <p class="text-center text-logo">RENT A CAR IN BALI</p>
                <p class="text-center text-b-logo">CV.BALI MEDIA RENT CAR</p>
              </div>
            </div>
          </nav>
    </div>
    <!--NAVBAR MENU-->   
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/about')}}">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/carlist')}}">CAR LIST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/galery')}}">GALERY</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
   @yield('content')
    
   <footer class="mt-5">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-4">
                    <h5 class="footer-font-title">CV. BALI MEDIA RENT CAR</h5>
                    <p class="text-center">
                        Sewa Mobil lepas kunci/dengan driver kualitas mobil terbaik <br>Unit Baru(2018/2022)
                    </p>
                </div>
                <div class="col-md-5">
                    <h5 class="text-secondary">
                        Alamat
                    </h5>
                    <p>
                        Jl. Raya Abianbase, No.16.Kapal, Kec. Mengwi, Kabupaten Badung, Bali
                    </p>
                    <h5 class="text-secondary">
                        Telepon Kantor
                    </h5>
                    <p>
                      (0361) 9006645
                    </p>
                </div>
                <div class="col-md-3">
                    <h6 class="text-center text-secondary">SOSIAL MEDIA</h6>
                    <ul class="nav justify-content-center sosial-media-icon">
                      <li class="nav-item">
                        <a  class="nav-link" href="https://www.instagram.com/cv.balimedia?igsh=MWVpeHVpeW43Y3o1OA==" target="_blank" ><i class='bx bxl-instagram'></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="" target="_blank"><i class='bx bxl-facebook-circle' ></i></a>
                      </li>
                      <li class="nav-item">
                        <a  class="nav-link" href="" target="_blank"><i class='bx bx-envelope'></i></a>
                      </li>
                      
                      <li class="nav-item">
                        <a class = "nav-link" href="https://wa.me/6285739847646" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>