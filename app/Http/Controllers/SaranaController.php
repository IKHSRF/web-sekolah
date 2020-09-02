<?php

namespace App\Http\Controllers;

use App\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saranas = Sarana::latest()->paginate(5);

        return view('admin.saranas.index', compact('saranas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.saranas.create');
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
            'nama_sarana' => 'required|string',
            'detail_sarana' => 'required|string',
            'foto_sarana' => 'required|image',
        ]);

        if($request->hasFile('foto_sarana')){
            $foto = request('foto_sarana');
            $nama_foto = time() .'-'. Str::slug($request->nama_sarana).'.'.$foto->getClientOriginalExtension();

            $sarana = Sarana::create([
                'nama_sarana' => $request->nama_sarana,
                'detail_sarana' => $request->detail_sarana,
                'foto_sarana' => $nama_foto,
            ]);

            $foto->move(public_path('gambar/sarana'), $nama_foto);
        
            return redirect()->route('admin.saranas.index')
                ->with('success', 'Sarana Berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Sarana Gagal Ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function show(Sarana $sarana)
    {
        return view('admin.saranas.show', compact('sarana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function edit(Sarana $sarana, $id)
    {
        $saranas = $sarana::find($id);
        return view('admin.saranas.edit', compact('saranas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sarana $id)
    {
        $sarana = $id;
        $this->validate($request, [
            'nama_sarana' => 'required|string',
            'detail_sarana' => 'required|string',
            'foto_sarana' => 'image',
        ]);
        
        if($request->hasFile('foto_sarana')){
            $foto = request('foto_sarana');
            $nama_foto = time() .'-'. Str::slug($request->nama_sarana).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/sarana/'), $nama_foto);
            File::delete(public_path('gambar/sarana/'. $sarana->foto_sarana));
        }else{
            $nama_foto = $sarana->foto_sarana;
        }

        $sarana->update([
            'nama_sarana' => $request->nama_sarana,
            'detail_sarana' => $request->detail_sarana,
            'foto_sarana' => $nama_foto,
        ]);

        return redirect()->route('admin.saranas.index')
            ->with('success', 'Sarana Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sarana $id)
    {
        $sarana = $id;
        if(!empty(public_path('gambar/sarana/'.$sarana->foto_sarana))){
            File::delete(public_path('gambar/sarana/'.$sarana->foto_sarana));
            $sarana->delete();
        }else{
            $sarana->delete();
        }
        
        return redirect()->route('admin.saranas.index')
            ->with('success', 'Sarana Berhasil Dihapus');
    }
}
