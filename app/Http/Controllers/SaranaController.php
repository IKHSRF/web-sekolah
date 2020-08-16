<?php

namespace App\Http\Controllers;

use App\Sarana;
use Illuminate\Http\Request;

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
        $request->validate([
            'nama_sarana' => 'required',
            'detail_sarana' => 'required',
            'foto_sarana' => 'required',
        ]);

        Sarana::create($request->all());

        return redirect()->route('admin.saranas.index')
            ->with('success', 'Sarana Berhasil Ditambahkan');
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
    public function edit(Sarana $sarana)
    {
        return view('admin.saranas.edit', compact('sarana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sarana $sarana)
    {
        $request->validate([
            'nama_sarana' => 'required',
            'detail_sarana' => 'required',
            'foto_sarana' => 'required',
        ]);

        $sarana->update($request->all());

        return redirect()->route('admin.saranas.index')
            ->with('success', 'Sarana Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sarana $sarana)
    {
        $sarana->delete();

        return redirect()->route('admin.saranas.index')
            ->with('success', 'Sarana Berhasil Dihapus');
    }
}
