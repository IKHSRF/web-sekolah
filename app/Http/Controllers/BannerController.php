<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(5);

        return view('admin.banners.index', compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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
            'nama_banner' => 'required|string',
            'foto_banner' => 'required|image',
        ]);

        if($request->hasFile('foto_banner')){
            $foto = request('foto_banner');
            $nama_foto = time() .'-'. Str::slug($request->nama_banner).'.'.$foto->getClientOriginalExtension();

            $banner = Banner::create([
                'nama_banner' => $request->nama_banner,
                'foto_banner' => $nama_foto,
            ]);
            // dd($banner);
            $foto->move(public_path('gambar/banner'), $nama_foto);
        
            return redirect()->route('admin.banners.index')
                    ->with('success', 'Banner Berhasil Dibuat');
        }else{
            return redirect()->back()->with('error', 'Banner Gagal Dibuat');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner, $id)
    {
        $banners = $banner::find($id);
        return view('admin.banners.edit', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $id)
    {
        $banner = $id;
        $this->validate($request, [
            'nama_banner' => 'required|string',
            'foto_banner' => 'image',
        ]);
        
        if($request->hasFile('foto_banner')){
            $foto = request('foto_banner');
            $nama_foto = time() .'-'. Str::slug($request->nama_banner).'.'.$foto->getClientOriginalExtension();
            $foto->move(public_path('gambar/banner/'), $nama_foto);
            File::delete(public_path('gambar/banner/'. $banner->foto_banner));
        }else{
            $nama_foto = $banner->foto_banner;
        }

        $banner->update([
            'nama_banner' => $request->nama_banner,
            'foto_banner' => $nama_foto,
        ]);

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $id)
    {
        $banner = $id;
        if(!empty(public_path('gambar/banner/'.$banner->foto_banner))){
            File::delete(public_path('gambar/banner/'.$banner->foto_banner));
            $banner->delete();
        }else{
            $banner->delete();
        }

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner Berhasil Dihapus');
    }
}
