<?php

namespace App\Http\Controllers;

use App\Mading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madings = Mading::latest()->paginate(5);

        return view('admin.madings.index', compact('madings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.madings.create');
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
            'nama_mading' => 'required|string',
            'detail_mading' => 'required|string',
            'foto_mading' => 'required|image',
        ]);

        if($request->hasFile('foto_mading')){
            $foto = request('foto_mading');
            $nama_foto = time() .'-'. Str::slug($request->nama_mading).'.'.$foto->getClientOriginalExtension();

            $mading = Mading::create([
                'nama_mading' => $request->nama_mading,
                'detail_mading' => $request->detail_mading,
                'foto_mading' => $nama_foto,
            ]);
            // dd($mading);
            $foto->move(public_path('gambar/mading'), $nama_foto);
        
            return redirect()->route('admin.madings.index')
                    ->with('success', 'Mading Berhasil Dibuat');
        }else{
            return redirect()->back()->with('error', 'Mading Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function show(Mading $mading)
    {
        return view('admin.madings.show', compact('mading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function edit(Mading $mading, $id)
    {
        $madings = $mading::find($id);
        return view('admin.madings.edit', compact('madings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mading $id)
    {
        $mading = $id;
        $this->validate($request, [
            'nama_mading' => 'required|string',
            'detail_mading' => 'required|string',
            'foto_mading' => 'image',
        ]);
        
        if($request->hasFile('foto_mading')){
            $foto = request('foto_mading');
            $nama_foto = time() .'-'. Str::slug($request->nama_mading).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/mading/'), $nama_foto);
            File::delete(public_path('gambar/mading/'. $mading->foto_mading));
        }else{
            $nama_foto = $mading->foto_mading;
        }

        $mading->update([
            'nama_mading' => $request->nama_mading,
            'detail_mading' => $request->detail_mading,
            'foto_mading' => $nama_foto,
        ]);

        return redirect()->route('admin.madings.index')
            ->with('success', 'Mading Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mading $id)
    {
        $mading = $id;
        if(!empty(public_path('gambar/mading/'.$mading->foto_mading))){
            File::delete(public_path('gambar/mading/'.$mading->foto_mading));
            $mading->delete();
        }else{
            $mading->delete();
        }

        return redirect()->route('admin.madings.index')
            ->with('success', 'Mading Berhasil Dihapus');
    }
}
