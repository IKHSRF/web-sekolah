<?php

namespace App\Http\Controllers;

use App\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasis = Prestasi::latest()->paginate(5);

        return view('admin.prestasis.index', compact('prestasis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasis.create');
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
            'nama_prestasi' => 'required|string',
            'detail_prestasi' => 'required|string',
            'foto_prestasi' => 'required|image',
        ]);

        if($request->hasFile('foto_prestasi')){
            $foto = request('foto_prestasi');
            $nama_foto = time() .'-'. Str::slug($request->nama_prestasi).'.'.$foto->getClientOriginalExtension();

            $prestasi = Prestasi::create([
                'nama_prestasi' => $request->nama_prestasi,
                'detail_prestasi' => $request->detail_prestasi,
                'foto_prestasi' => $nama_foto,
            ]);

            $foto->move(public_path('gambar/prestasi'), $nama_foto);
        
            return redirect()->route('admin.prestasis.index')
                    ->with('success', 'Prestasi Berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Prestasi Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        return view('admin.prestasis.show', compact('prestasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi, $id)
    {
        $prestasis = $prestasi::find($id);
        return view('admin.prestasis.edit', compact('prestasis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $id)
    {
        $prestasi = $id;
        $this->validate($request, [
            'nama_prestasi' => 'required|string',
            'detail_prestasi' => 'required|string',
            'foto_prestasi' => 'image',
        ]);
        
        if($request->hasFile('foto_prestasi')){
            $foto = request('foto_prestasi');
            $nama_foto = time() .'-'. Str::slug($request->nama_prestasi).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/prestasi/'), $nama_foto);
            File::delete(public_path('gambar/prestasi/'. $prestasi->foto_prestasi));
        }else{
            $nama_foto = $prestasi->foto_prestasi;
        }

        $prestasi->update([
            'nama_prestasi' => $request->nama_prestasi,
            'detail_prestasi' => $request->detail_prestasi,
            'foto_prestasi' => $nama_foto,
        ]);

        return redirect()->route('admin.prestasis.index')
            ->with('success', 'Prestasi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $id)
    {
        $prestasi = $id;
        if(!empty(public_path('gambar/prestasi/'.$prestasi->foto_prestasi))){
            File::delete(public_path('gambar/prestasi/'.$prestasi->foto_prestasi));
            $prestasi->delete();
        }else{
            $prestasi->delete();
        }

        return redirect()->route('admin.prestasis.index')
            ->with('success', 'Prestasi Berhasil Dihapus');
    }
}
