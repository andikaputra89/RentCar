@extends('front.layout.template')
@section('title','CV. BaliMedia RentCar | Home')
@section('content')
<div class="container">
    <img src="asset/img/g mix.png" alt="Bannner Image" class="img-fluid mt-3" width="100%" height="500">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="carousel-size mx-auto">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  @foreach ($galery as $key => $item)
                  <div class="carousel-item {{$key==0 ? 'active':''}}">
                    <img src="{{asset('storage/asset/img/'.$item->gambar)}}" class="d-block w-100" alt="Image Galery">
                  </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
              <div class="mx-auto shadow-lg photo-text">
                <p class="text-center">PHOTO FROM GALERY</p>
              </div>
             
              <a class="mx-auto" href="https://wa.me/6285739847646">
                <img class="img-fluid" src="asset/img/TOMBOL WA.png" alt="" width="500px">
              </a>
        </div>
        <div class="col-md-6">
            <div class="card float-end me-5 border-0" style="width: 28rem;">
                <img src="asset/img/g3.png" class=" img-fluid card-img-top" alt="Image">
                <div class="card-body">
                  <h5 class="banner-title">CV. BALI MEDIA RENT CAR</h5>
                  <p class="text-center">CV. Bali Media didirikan pada tahun 2022, hingga saat ini kami terus be rusaha untuk mengembangkan produk dan layanan yang kami sediakan. Berawal dari hanya menyewakan dua mobil, kini CV. Bali Media telah berkembang menyediakan beberapa pilihan armada. Semua kendaraan mewah yang kami sewa sudah termasuk supir dan bbm</p>
                </div>
              </div>
        </div>
    </div>
    <!--ULASAN FORM-->
    <div class="row">
        <div class="col-md-8">
          @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('msg'))
                <div class="alert alert-success mt-3">
                    {{session('msg')}}
                </div>
            @endif
            <form action="{{url('/review')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ulasan/Tanggapan</label>
                    <textarea class="form-control" name="ulasan" id="" cols="20" rows="5"></textarea>
                  </div>
                <button type="submit" class="btn btn-dark float-end">Kirim</button>
              </form>
        </div>
        <div class="col-md-4">
          <div class="card review-card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title card-title-review">Ulasan</h5>
              <div class="row">
                <hr>
                @foreach ($review as $item)
                  <div class="col-3">
                    <i class='bx bxs-user-circle user-icon'></i>
                  </div>
                  <div class="col-9">
                    <h5 class="m-0">{{$item->nama}}</h5>
                    <p class="card-text">{{$item->ulasan}}</p>
                  </div>
                  <hr>
                @endforeach
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection