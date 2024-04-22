<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Galery;
use App\Models\Mobil;
use App\Models\Varian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'namaMobil'=>'required|min:3',
            'tahun'=>'required',
            'gambar'=>'required|image|file'
        ]);

        $gambar = $request->file('gambar');
        $filename = uniqid().'.'.$gambar->getClientOriginalExtension();
        $gambar->storeAs('public/asset/img/',$filename);

        $mobil = Mobil::create([
            'nama'=>$request->namaMobil,
            'tahun'=>$request->tahun,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$filename
        ]);
        if($mobil)
        {
            $mobil_id = $mobil->id;
            Varian::create([
                'mobil_id'=>$mobil_id,
                'harga_driver'=>$request->harga_driver,
                'harga_hanya_mobil'=>$request->harga_hanya_mobil
            ]);

            // if ($galery = $request->file('galery')) {
            //     foreach ($galery as $galery) {
            //         $filename = uniqid().'.'.$galery->getClientOriginalExtension();
            //         $galery->storeAs('public/asset/img/',$filename);
                    
            //         Galery::create([
            //             'mobil_id' => $mobil_id,
            //             'gambar' =>$filename
            //         ]);

            //     }
            // }    
        }

        return back()->with('msg','Data Mobil Berhasil Ditambahkan');
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'namaMobil'=>'required|min:3',
            'tahun'=>'required',
            'gambar'=>'image|file'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename =uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/asset/img/'.$filename);

            Storage::delete('public/asset/img/'.$request->oldImg);

            $data['gambar'] = $filename;
        }
        else{
            $data['gambar'] = $request->oldImg;
        }

        Mobil::find($id)->update([
            'nama'=>$data['namaMobil'],
            'tahun'=>$data['tahun'],
            'deskripsi'=>$request->deskripsi,
            'gambar' =>$data['gambar']
        ]);

        Varian::find($id)->update([
            'harga_driver'=>$request->harga_driver,
            'harga_hanya_mobil' => $request->harga_hanya_mobil,
        ]);

        return back()->with('msg','Data Mobil Berhasil Diedit');

    }

    public function delete(string $id)
    {
        $data = Mobil::find($id);
        
        Varian::where('mobil_id',$id)->delete();
        // $galery = Galery::where('mobil_id',$id)->get();
        // foreach ($galery as $galery) {
        //     Storage::delete('public/asset/img/'.$galery->gambar);
        //     $galery->delete();
        // }
        
        Storage::delete('public/asset/img/'.$data->gambar);
        $data->delete();

        return back()->with('msg','Data Mobil Berhasil Dihapus');
    }
}
