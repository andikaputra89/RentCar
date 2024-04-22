@extends('front.layout.template')
@section('title','CV. BaliMedia RentCar | Galery')
@section('content')
<div class="container">
    <div class="mx-auto">
        <p class="text-center m-0" style="font-size: 4rem; font-weight: 900;"><span style="color: #FF6D01;">RENT A CAR</span> IN BALI</p>
        <p class="text-center" style="font-size: 2.3rem; font-weight:500 ;">OUR LOYAL CUSTOMER</p>
    </div>

    <div class="mx-auto">
        <div class="row justify-content-center gap-2">
            @foreach ($galery as $item)
                <div class="col-md-3">
                    <div class="card border-0" style="width: 17rem;">
                        <img src="{{asset('storage/asset/img/'.$item->gambar)}}" class="card-img-top" alt="galery">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection