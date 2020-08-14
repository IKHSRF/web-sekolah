<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

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

        return view('gurus.index', compact('gurus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gurus.create');
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
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'foto_guru' => 'required',
        ]);

        Guru::create($request->all());

        return redirect()->route('gurus.index')
            ->with('success', 'Guru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return view('gurus.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('gurus.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama_guru' => 'required',
            'jabatan' => 'required',
            'foto_guru' => 'required',
        ]);

        $guru->update($request->all());

        return redirect()->route('gurus.index')
            ->with('success', 'Guru Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('gurus.index')
            ->with('success', 'Guru Berhasil Dihapus');
    }
}
