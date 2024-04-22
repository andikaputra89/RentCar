<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Mobil;
use App\Models\Review;
use App\Models\Varian;
use Illuminate\Http\Request;

class Carlist extends Controller
{
    public function index()
    {
        return view('front.carlist',[
            'mobil'=>Varian::with('mobil')->get(),
            'review'=>Review::latest()->get()
        ]);
    }
}
