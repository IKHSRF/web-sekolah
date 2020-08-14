<?php

namespace App\Http\Controllers;

use App\Mading;
use Illuminate\Http\Request;

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

        return view('madings.index', compact('madings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('madings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mading' => 'required',
            'detail_mading' => 'required',
            'foto_mading' => 'required',
        ]);

        Mading::create($request->all());

        return redirect()->route('madings.index')
            ->with('success', 'Mading Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function show(Mading $mading)
    {
        return view('madings.show', compact('mading'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function edit(Mading $mading)
    {
        return view('madings.edit', compact('mading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mading $mading)
    {
        $request->validate([
            'nama_mading' => 'required',
            'detail_mading' => 'required',
            'foto_mading' => 'required',
        ]);

        $mading->update($request->all());

        return redirect()->route('madings.index')
            ->with('success', 'Mading Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mading  $mading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mading $mading)
    {
        $mading->delete();

        return redirect()->route('madings.index')
            ->with('success', 'Mading Berhasil Dihapus');
    }
}
