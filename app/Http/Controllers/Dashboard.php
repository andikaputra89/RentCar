<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Varian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Dashboard extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index',[
            'mobil'=>Varian::with('mobil')->latest()->get()
        ]);

    }
    public function galery()
    {
        return view('admin.galery.index',[
            'galery'=>Galery::latest()->get()
        ]);
    }
    public function store(Request $request)
    {
        $galery = $request->file('galery');
            foreach ($galery as $galery) {
                $filename = uniqid().'.'.$galery->getClientOriginalExtension();
                $galery->storeAs('public/asset/img/',$filename);
                
                Galery::create([
                    'gambar' =>$filename
                ]);

            }
            return back()->with('msg','Data brhasil disimpan');
            
    }
    public function delete(string $id)
    {
        $data = Galery::find($id);

        Storage::delete('public/asset/img/'.$data->gambar);

        $data->delete();

        return back()->with('msg','Data Berhasil Dihapus');
    }
}
