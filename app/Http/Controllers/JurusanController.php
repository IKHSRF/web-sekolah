<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusans = Jurusan::latest()->paginate(5);

        return view('admin.jurusans.index', compact('jurusans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jurusans.create');
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
            'nama_jurusan' => 'required|string',
            'tahun_berdiri' => 'required',
            'detail_jurusan' => 'required|string',
            'foto_jurusan' => 'required|image',
        ]);

        if($request->hasFile('foto_jurusan')){
            $foto = request('foto_jurusan');
            $nama_foto = time() .'-'. Str::slug($request->nama_jurusan).'.'.$foto->getClientOriginalExtension();

            $jurusan = Jurusan::create([
                'nama_jurusan' => $request->nama_jurusan,
                'tahun_berdiri' => $request->tahun_berdiri,
                'detail_jurusan' => $request->detail_jurusan,
                'foto_jurusan' => $nama_foto,
            ]);

            $foto->move(public_path('gambar/jurusan'), $nama_foto);
        
            return redirect()->route('admin.jurusans.index')
                    ->with('success', 'Jurusan Berhasil Dibuat');
        }else{
            return redirect()->back()->with('error', 'Jurusan Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        return view('admin.jurusans.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan, $id)
    {
        $jurusans = $jurusan::find($id);
        return view('admin.jurusans.edit', compact('jurusans'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $id)
    {
        $jurusan = $id;
        $this->validate($request, [
            'nama_jurusan' => 'required|string',
            'tahun_berdiri' => 'required|numeric',
            'detail_jurusan' => 'required|string',
            'foto_jurusan' => 'image',
        ]);
        
        if($request->hasFile('foto_jurusan')){
            $foto = request('foto_jurusan');
            $nama_foto = time() .'-'. Str::slug($request->nama_jurusan).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/jurusan/'), $nama_foto);
            File::delete(public_path('gambar/jurusan/'. $jurusan->foto_jurusan));
        }else{
            $nama_foto = $jurusan->foto_jurusan;
        }

        $jurusan->update([
            'nama_jurusan' => $request->nama_jurusan,
            'tahun_berdiri' => $request->tahun_berdiri,
            'detail_jurusan' => $request->detail_jurusan,
            'foto_jurusan' => $nama_foto,
        ]);

        return redirect()->route('admin.jurusans.index')
            ->with('success', 'Jurusan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $id)
    {
        $jurusan = $id;
        if(!empty(public_path('gambar/jurusan/'.$jurusan->foto_jurusan))){
            File::delete(public_path('gambar/jurusan/'.$jurusan->foto_jurusan));
            $jurusan->delete();
        }else{
            $jurusan->delete();
        }

        return redirect()->route('admin.jurusans.index')
            ->with('success', 'Jurusan Berhasil Dihapus');
    }
}
