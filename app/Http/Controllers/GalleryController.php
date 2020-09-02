<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = Gallery::latest()->paginate(5);

        return view('admin.gallerys.index', compact('gallerys'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallerys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_galeri' => 'required|string',
            'detail_galeri' => 'required|string',
            'foto_galeri' => 'required|image',
        ]);

        if($request->hasFile('foto_galeri')){
            $foto = request('foto_galeri');
            $nama_foto = time() .'-'. Str::slug($request->nama_galeri).'.'.$foto->getClientOriginalExtension();

            $galeri = Gallery::create([
                'nama_galeri' => $request->nama_galeri,
                'detail_galeri' => $request->detail_galeri,
                'foto_galeri' => $nama_foto,
            ]);
            // dd($galeri);
            $foto->move(public_path('gambar/galeri'), $nama_foto);
        
            return redirect()->route('admin.gallerys.index')
                    ->with('success', 'Galeri Berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Galeri Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallerys.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery, $id)
    {
        $gallerys = $gallery::find($id);
        return view('admin.gallerys.edit', compact('gallerys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $id)
    {
        $galeri = $id;
        $this->validate($request, [
            'nama_galeri' => 'required|string',
            'detail_galeri' => 'required|string',
            'foto_galeri' => 'image',
        ]);
        
        if($request->hasFile('foto_galeri')){
            $foto = request('foto_galeri');
            $nama_foto = time() .'-'. Str::slug($request->nama_galeri).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/galeri/'), $nama_foto);
            File::delete(public_path('gambar/galeri/'. $galeri->foto_galeri));
        }else{
            $nama_foto = $galeri->foto_galeri;
        }

        $galeri->update([
            'nama_galeri' => $request->nama_galeri,
            'detail_galeri' => $request->detail_galeri,
            'foto_galeri' => $nama_foto,
        ]);

        return redirect()->route('admin.gallerys.index')
            ->with('success', 'Galeri Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $id)
    {
        $galeri = $id;
        if(!empty(public_path('gambar/galeri/'.$galeri->foto_galeri))){
            File::delete(public_path('gambar/galeri/'.$galeri->foto_galeri));
            $galeri->delete();
        }else{
            $galeri->delete();
        }

        return redirect()->route('admin.gallerys.index')
            ->with('success', 'Galeri Berhasil Dihapus');
    }
}
