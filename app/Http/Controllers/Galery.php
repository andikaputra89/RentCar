<?php

namespace App\Http\Controllers;

use App\Models\Galery as ModelsGalery;
use Illuminate\Http\Request;

class Galery extends Controller
{
    public function index()
    {
        return view('front.galery',[
            'galery'=>ModelsGalery::get()
        ]);
    }
}
