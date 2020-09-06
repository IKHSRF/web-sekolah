<?php

namespace App\Http\Controllers;

use App\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturs = Struktur::latest()->paginate(5);

        return view('admin.strukturs.index', compact('strukturs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.strukturs.create');
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
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'required|image',
        ]);

        if ($request->hasFile('foto')) {
            $foto = request('foto');
            $nama_foto = time() . '-' . Str::slug($request->nama) . '.' . $foto->getClientOriginalExtension();

            $guru = Struktur::create([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $nama_foto,
            ]);
            // dd($guru);
            $foto->move(public_path('gambar/struktur'), $nama_foto);

            return redirect()->route('admin.strukturs.index')
                ->with('success', 'Struktur Berhasil Ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Struktur Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        return view('admin.strukturs.show', compact('struktur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur, $id)
    {
        $strukturs = $struktur::find($id);
        return view('admin.strukturs.edit', compact('strukturs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur $id)
    {
        $struktur = $id;
        $this->validate($request, [
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'foto' => 'image',
        ]);

        if ($request->hasFile('foto')) {
            $foto = request('foto');
            $nama_foto = time() . '-' . Str::slug($request->nama) . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/struktur/'), $nama_foto);
            File::delete(public_path('gambar/struktur/' . $struktur->foto));
        } else {
            $nama_foto = $struktur->foto;
        }

        $struktur->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $nama_foto,
        ]);

        return redirect()->route('admin.strukturs.index')
            ->with('success', 'Struktur Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $id)
    {
        $struktur = $id;
        if (!empty(public_path('gambar/struktur/' . $struktur->foto))) {
            File::delete(public_path('gambar/struktur/' . $struktur->foto));
            $struktur->delete();
        } else {
            $struktur->delete();
        }

        return redirect()->route('admin.strukturs.index')
            ->with('success', 'Struktur Berhasil Dihapus');
    }
}
