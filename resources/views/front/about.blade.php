@extends('front.layout.template')
@section('title','CV. BaliMedia RentCar | About')
@section('content')
<div class="container">
    <div class="mx-auto">
        <p class="text-center m-0" style="font-size: 4rem; font-weight: 900;"><span style="color: #FF6D01;">RENT A CAR</span> IN BALI</p>
        <p class="text-center" style="font-size: 2.3rem; font-weight:500 ;">OUR LOYAL CUSTOMER</p>
    </div>

    <div class="row align-items-center">
        <div class="col-md-6">
            <p class="align-content-center">Bisa menghubungi kami dengan mengklik link dibawah ini</p>
            <a href="https://wa.me/6285739847646"><img src="{{asset('asset/img/TOMBOL WA.png')}}" alt="Tombol Whatshap" width="400px"></a>
        </div>
        <div class="col-md-6" style="border-left: 2px solid grey;">
            <p class="text-center"> Atau langsung datang ke tempat kami di Map Berikut</p>
            <div class="p-3" style="border-radius: 10px;  box-shadow: rgba(0, 0, 0, 0.24) 2px 3px 8px;">
                <iframe class="mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.1611872455737!2d115.1810412!3d-8.580496199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23951a487eda3%3A0xe4eac767104def78!2sCV%20Bali%20Media%20Printing%20%26%20Advertising!5e0!3m2!1sid!2sid!4v1713578458338!5m2!1sid!2sid" width="510" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>
    </div>
</div>
@endsection