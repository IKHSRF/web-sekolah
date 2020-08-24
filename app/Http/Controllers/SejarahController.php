<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sejarahs = Sejarah::latest()->paginate(5);

        return view('admin.sejarahs.index', compact('sejarahs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sejarahs.create');

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
            'judul_sejarah' => 'required|string',
            'detail_sejarah' => 'required|string',
        ]);

        Sejarah::create($request->all());

        return redirect()->route('admin.sejarahs.index')
            ->with('success', 'Sejarah Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        return view('admin.sejarahs.show', compact('sejarah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejarah $sejarah, $id)
    {
        $sejarahs = $sejarah::find($id);
        return view('admin.sejarahs.edit', compact('sejarahs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah, $id)
    {
        $sejarah::where('id', $id)
            ->update([
                'judul_sejarah' => $request->judul_sejarah,
                'detail_sejarah' => $request->detail_sejarah,
            ]);

        return redirect()->route('admin.sejarahs.index')
            ->with('success', 'Sejarah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah, $id)
    {
        $sejarah->destroy($id);

        return redirect()->route('admin.sejarahs.index')
            ->with('success', 'Sejarah Berhasil Dihapus');
    }
}
