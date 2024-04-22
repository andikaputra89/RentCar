<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
       $data = $request->validate([
        'nama'=>'required|min:3',
        'email' => 'required|email',
        'ulasan' => 'required|min:5',
        
       ]);

       Review::create($data);
       return redirect()->back()->with('msg','Ulasan Berhasil Dikirim');

    }
}
