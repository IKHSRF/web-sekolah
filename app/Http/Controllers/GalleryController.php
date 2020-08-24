<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

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
            'nama_galeri' => 'required',
            'detail_galeri' => 'required',
            'foto_galeri' => 'required',
        ]);

        Gallery::create($request->all());

        return redirect()->route('admin.gallerys.index')
            ->with('success', 'Galeri Berhasil Ditambahakan');
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
    public function update(Request $request, Gallery $gallery, $id)
    {
        $gallery::where('id', $id)
            ->update([
                'nama_galeri' => $request->nama_galeri,
                'detail_galeri' => $request->detail_galeri,
                'foto_galeri' => $request->foto_galeri,
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
    public function destroy(Gallery $gallery, $id)
    {
        $gallery->destroy($id);

        return redirect()->route('admin.gallerys.index')
            ->with('success', 'Galeri Berhasil Dihapus');
    }
}
