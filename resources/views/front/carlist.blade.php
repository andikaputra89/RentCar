@extends('front.layout.template')
@section('title','CV. BaliMedia RentCar | CarList')
@section('content')
<div class="container">
    <div class="mx-auto">
        <p class="text-center m-0" style="font-size: 4rem; font-weight: 900;"><span style="color: #FF6D01;">RENT A CAR</span> IN BALI</p>
        <p class="text-center" style="font-size: 1rem; font-weight:500 ;">Sewa Mobil DI Bali lepas kunci/dengan driver <br>Kualitas Mobil Terbaik <br> Unit Baru (2018/2022)</p>
    </div>

    <div class="row">
        @foreach ($mobil as $item)
            <div class="col-md-4">
                <div class="card border-0" style="width: 20.5rem;">
                    <img src="{{asset('storage/asset/img/'.$item->mobil->gambar)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title">{{$item->harga_driver}}/Day</h5>
                            <ul class="list-group-flush">
                                <li class="list-group-item">- Driver guide</li>
                                <li class="list-group-item">- Car And Fuel</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            @if ($item->harga_hanya_mobil != 0)
                                <h5 class="card-title">{{$item->harga_hanya_mobil}}/Day</h5>
                                <ul class="list-group-flush">
                                <li class="list-group-item">- Unit Only</li>
                                <li class="list-group-item">- Car And Fuel</li>
                            @endif
                            
                        </ul>
                        </div>
                    </div>
                    <p>{{$item->mobil->deskripsi}}</p>
                    <a href="https://wa.me/6285739847646" target="_blank"><img src="{{asset('asset/img/BOOKING.png')}}" alt="Tombol Booking" width="110px"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
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
        <div class="card" style="width: 20rem;">
          <div class="card-body">
            <h5 class="card-title" style="text-decoration: underline;">Ulasan</h5>
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