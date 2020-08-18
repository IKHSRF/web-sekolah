<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

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
            'foto_jurusan' => 'required',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('admin.jurusans.index')
            ->with('success', 'Jurusan Berhasil Dibuat');
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
    public function update(Request $request, Jurusan $jurusan, $id)
    {
        $jurusan::where('id', $id)
            ->update([
                'nama_jurusan' => $request->nama_jurusan,
                'detail_jurusan' => $request->detail_jurusan,
                'tahun_berdiri' => $request->tahun_berdiri,
                'foto_jurusan' => $request->foto_jurusan,
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
    public function destroy(Jurusan $jurusan, $id)
    {
        $jurusan->destroy($id);

        return redirect()->route('admin.jurusans.index')
            ->with('success', 'Jurusan Berhasil Dihapus');
    }
}
