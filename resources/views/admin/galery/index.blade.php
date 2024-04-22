@extends('admin.layout.template')
@section('content')
<div class="container">
    <h1 class="text-center">Galery</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>
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
        <div class="row">
            @foreach ($galery as $galery)
                <div class="col-md-3">
                    <div class="card m-2" style="max-width: 17rem;">
                        <div class="img" style="max-height: 400px;">
                            <img src="{{asset('storage/asset/img/'.$galery->gambar)}}" class="card-img-top" alt="galery" style="height:300px;object-fit:cover;">
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <form action="{{url('/img-dlt/'.$galery->id)}}" method="get">
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Yakin Ingin Menghapus Data?');"> <i class='bx bxs-trash-alt' ></i>Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
  </div>
  @include('admin.galery.modalTambah')
@endsection
      
  
  
   