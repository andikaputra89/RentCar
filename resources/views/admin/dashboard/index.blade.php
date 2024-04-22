@extends('admin.layout.template')
@section('content')
    
<div class="container">
  <h1 class="text-center">List Mobil</h1>
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
  <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Mobil</th>
          <th scope="col">Tahun</th>
          <th scope="col">Harga Driver</th>
          <th scope="col">Harga Hanya Mobil</th>
          <th scope="col">Gambar</th>
          <th scope="col" width="130px">Aksi</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($mobil as $item)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$item->mobil->nama}}</td>
          <td>{{$item->mobil->tahun}}</td>
          <td>{{$item->harga_driver}}</td>
          <td>@if ($item->harga_hanya_mobil == 0)
              <p>Driver Only</p>
          @endif</td>
          <td><img src="{{asset('storage/asset/img/'.$item->mobil->gambar)}}" alt="gambar" width="80px"></td>
          <td class="p-3">
            <div class="row p-0">
              <div class="col-6 m-0">
                <button data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}" class="btn btn-success"><i class='bx bxs-edit-alt'></i></button>
            
              </div>
              <div class="col-6 m-0">
                <form action="{{url('/delete/'.$item->mobil_id)}}" method="get">
                  <button type="submit" onclick="return confirm('Apakah Yakin Ingin Menghapus Data?');" class="btn btn-danger"><i class='bx bxs-trash-alt' ></i></button>
                </form>
              </div>
            </div>
            
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
</div>

  <!-- Modal -->
  @include('admin.dashboard.tambahModal')
  @include('admin.dashboard.editModal')
@endsection

  
