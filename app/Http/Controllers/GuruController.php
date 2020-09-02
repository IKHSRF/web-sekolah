<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::latest()->paginate(5);

        return view('admin.gurus.index', compact('gurus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gurus.create');
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
            'nama_guru' => 'required|string',
            'jabatan' => 'required|string',
            'foto_guru' => 'required|image',
        ]);

        if($request->hasFile('foto_guru')){
            $foto = request('foto_guru');
            $nama_foto = time() .'-'. Str::slug($request->nama_guru).'.'.$foto->getClientOriginalExtension();

            $guru = Guru::create([
                'nama_guru' => $request->nama_guru,
                'jabatan' => $request->jabatan,
                'foto_guru' => $nama_foto,
            ]);
            // dd($guru);
            $foto->move(public_path('gambar/guru'), $nama_foto);
        
            return redirect()->route('admin.gurus.index')
                    ->with('success', 'guru Berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'guru Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return view('admin.gurus.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru, $id)
    {
        $gurus = $guru::find($id);
        return view('admin.gurus.edit', compact('gurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $id)
    {
        $guru = $id;
        $this->validate($request, [
            'nama_guru' => 'required|string',
            'jabatan' => 'required|string',
            'foto_guru' => 'image',
        ]);
        
        if($request->hasFile('foto_guru')){
            $foto = request('foto_guru');
            $nama_foto = time() .'-'. Str::slug($request->nama_guru).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/guru/'), $nama_foto);
            File::delete(public_path('gambar/guru/'. $guru->foto_guru));
        }else{
            $nama_foto = $guru->foto_guru;
        }

        $guru->update([
            'nama_guru' => $request->nama_guru,
            'jabatan' => $request->jabatan,
            'foto_guru' => $nama_foto,
        ]);

        return redirect()->route('admin.gurus.index')
            ->with('success', 'Guru Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $id)
    {
        $guru = $id;
        if(!empty(public_path('gambar/guru/'.$guru->foto_guru))){
            File::delete(public_path('gambar/guru/'.$guru->foto_guru));
            $guru->delete();
        }else{
            $guru->delete();
        }

        return redirect()->route('admin.gurus.index')
            ->with('success', 'Guru Berhasil Dihapus');
    }
}
