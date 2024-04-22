<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Review;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('front.index',[
            'galery'=>Galery::latest()->get(),
            'review' => Review::latest()->get()
        ]);
    }
}
