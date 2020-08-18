<?php

namespace App\Http\Controllers;

use App\Motto;
use Illuminate\Http\Request;

class MottoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mottos = Motto::latest()->paginate(5);

        return view('admin.mottos.index', compact('mottos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mottos.create');
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
            'visi' => 'required',
            'misi' => 'required',
            'motto' => 'required',
        ]);

        Motto::create($request->all());

        return redirect()->route('admin.mottos.index')
            ->with('success', 'Visi Misi Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Motto  $motto
     * @return \Illuminate\Http\Response
     */
    public function show(Motto $motto)
    {
        return view('admin.mottos.show', compact('motto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motto  $motto
     * @return \Illuminate\Http\Response
     */
    public function edit(Motto $motto, $id)
    {
        $mottos = $motto::find($id);
        return view('admin.mottos.edit', compact('mottos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motto  $motto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motto $motto, $id)
    {
        $motto::where('id', $id)
            ->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
                'motto' => $request->motto,
            ]);

        return redirect()->route('admin.mottos.index')
            ->with('success', 'Visi Misi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motto  $motto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motto $motto, $id)
    {
        $motto->destroy($id);

        return redirect()->route('admin.mottos.index')
            ->with('success', 'Visi Misi Berhasil Dihapus');
    }
}
