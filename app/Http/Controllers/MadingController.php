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
            'foto_mading' => 'required',
        ]);

        Mading::create($request->all());

        return redirect()->route('admin.madings.index')
            ->with('success', 'Mading Berhasil Ditambahkan');
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
    public function update(Request $request, Mading $mading, $id)
    {
        $mading::where('id', $id)
            ->update([
                'nama_mading' => $request->nama_mading,
                'detail_mading' => $request->detail_mading,
                'foto_mading' => $request->foto_mading,
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
    public function destroy(Mading $mading, $id)
    {
        $mading->destroy($id);

        return redirect()->route('admin.madings.index')
            ->with('success', 'Mading Berhasil Dihapus');
    }
}
