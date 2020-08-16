<?php

namespace App\Http\Controllers;

use App\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akademiks = Akademik::latest()->paginate(5);

        return view('admin.akademiks.index', compact('akademiks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.akademiks.create');
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
            'nama_akademik' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        Akademik::create($request->all());

        return redirect()->route('akademiks.index')
            ->with('success', 'Kalender Akademik Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function show(Akademik $akademik)
    {
        return view('admin.akademiks.show', compact('akademik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function edit(Akademik $akademik)
    {
        return view('admin.akademiks.edit', compact('akademik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akademik $akademik)
    {
        $request->validate([
            'nama_akademik' => 'required',
            'tahun_akademik' => 'required',
        ]);

        $akademik->update($request->all());

        return redirect()->route('admin.akademiks.index')
            ->with('success', 'Kalender Akademik Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akademik $akademik)
    {
        $akademik->delete();

        return redirect()->route('admin.akademiks.index')
            ->with('success', 'Kalender Akademik Berhasil Dihapus');
    }
}
