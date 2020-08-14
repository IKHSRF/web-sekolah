<?php

namespace App\Http\Controllers;

use App\Kemitraan;
use Illuminate\Http\Request;

class KemitraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kemitraans = Kemitraan::latest()->paginate(5);

        return view('kemitraans.index', compact('kemitraans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kemitraans.create');
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
            'nama_mitra' => 'required',
            'detail_mitra' => 'required',
            'tahun_mitra' => 'required',
            'foto_mitra' => 'required',
        ]);

        Kemitraan::create($request->all());

        return redirect()->route('kemitraans.index')
            ->with('success', 'Mitra Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function show(Kemitraan $kemitraan)
    {
        return view('kemitraans.show', compact('kemitraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kemitraan $kemitraan)
    {
        return view('kemitraans.edit', compact('kemitraan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kemitraan $kemitraan)
    {
        $request->validate([
            'nama_mitra' => 'required',
            'detail_mitra' => 'required',
            'tahun_mitra' => 'required',
            'foto_mitra' => 'required',
        ]);

        $kemitraan->update($request->all());

        return redirect()->route('kemitraans.index')
            ->with('success', 'Mitra Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kemitraan $kemitraan)
    {
        $kemitraan->delete();

        return redirect()->route('kemitraans.index')
            ->with('success', 'Mitra Berhasil Dihapus');
    }
}
