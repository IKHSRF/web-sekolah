<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(5);

        return view('admin.kontaks.index', compact('kontaks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontaks.create');
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
            'hotline' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'youtube' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
        ]);

        Kontak::create($request->all());

        return redirect()->route('admin.kontaks.index')
            ->with('success', 'Kontak Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        return view('admin.kontaks.show', compact('kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontak $kontak, $id)
    {
        $kontaks = $kontak::find($id);
        return view('admin.kontaks.edit', compact('kontaks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontak $kontak, $id)
    {
        $kontak::where('id', $id)
            ->update([
                'hotline' => $request->hotline,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'youtube' => $request->youtube,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
            ]);

        return redirect()->route('admin.kontaks.index')
            ->with('success', 'Kontak Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontak $kontak, $id)
    {
        $kontak->destroy($id);

        return redirect()->route('admin.kontaks.index')
            ->with('success', 'Kontak Berhasil Dihapus');
    }
}
