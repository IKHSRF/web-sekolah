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

        return view('admin.kemitraans.index', compact('kemitraans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kemitraans.create');
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
            'nama_mitra' => 'required|string',
            'detail_mitra' => 'required|string',
            'tahun_mitra' => 'required',
            'foto_mitra' => 'required',
        ]);

        Kemitraan::create($request->all());

        return redirect()->route('admin.kemitraans.index')
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
        return view('admin.kemitraans.show', compact('kemitraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kemitraan $kemitraan, $id)
    {
        $kemitraans = $kemitraan::find($id);
        return view('admin.kemitraans.edit', compact('kemitraans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kemitraan $kemitraan, $id)
    {
        $kemitraan::where('id', $id)
            ->update([
                'nama_mitra' => $request->nama_mitra,
                'detail_mitra' => $request->detail_mitra,
                'tahun_mitra' => $request->tahun_mitra,
                'foto_mitra' => $request->foto_mitra,
            ]);

        return redirect()->route('admin.kemitraans.index')
            ->with('success', 'Mitra Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kemitraan  $kemitraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kemitraan $kemitraan, $id)
    {
        $kemitraan->destroy($id);

        return redirect()->route('admin.kemitraans.index')
            ->with('success', 'Mitra Berhasil Dihapus');
    }
}
