<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;
use App\Kategori;
use App\Penerbit;
use App\Tipe;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori = DB::table('films')->get();
        $buku = Buku::all();
        return view('buku.index', ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $tipe = Tipe::all();
        return view('buku.create', compact('kategori','penerbit','tipe'));
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
            'kategori_id' => 'required', 
            'judul_buku' => 'required',
            'deskripsi_buku' => 'required',
            'penerbit_id' => 'required',
            'penulis_buku' => 'required',
            'jumlah_halaman' =>'required',
            'tahun_terbit' => 'required',
            'harga_buku' => 'required',
            'tipe_id' => 'required',    
            'cover_buku' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required',   
        ]);

        $img = $request->file('cover_buku');
        $cover_buku = $img->getClientOriginalName();
        $upDir = 'img/buku';
        $img->move($upDir, $cover_buku);

        Buku::create([
            'kategori_id' => $request->kategori_id,
            'judul_buku' => $request->judul_buku,
            'deskripsi_buku' => $request->deskripsi_buku,
            'penerbit_id' => $request->penerbit_id,
            'penulis_buku' => $request->penulis_buku,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_terbit' => $request->tahun_terbit,
            'harga_buku' => $request->harga_buku,
            'cover_buku' => $cover_buku,
            'tipe_id' => $request->tipe_id,
            'status' => $request->status
        ]);

        // Buku::create($request->all());
        return redirect('/buku')->with('status', 'Data Buku Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $tipe = Tipe::all();

        return view('buku.edit', compact('kategori','penerbit','tipe','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'kategori_id' => 'required', 
            'judul_buku' => 'required',
            'deskripsi_buku' => 'required',
            'penerbit_id' => 'required',
            'penulis_buku' => 'required',
            'jumlah_halaman' =>'required',
            'tahun_terbit' => 'required',
            'harga_buku' => 'required',
            'cover_buku' => 'required',
            'tipe_id' => 'required',    
            'status' => 'required',   
        ]);

        Buku::where('id', $buku->id)
            ->update([
                'kategori_id' => $request->kategori_id,
                'judul_buku' => $request->judul_buku,
                'deskripsi_buku' => $request->deskripsi_buku,
                'penerbit_id' => $request->penerbit_id,
                'penulis_buku' => $request->penulis_buku,
                'jumlah_halaman' => $request->jumlah_halaman,
                'tahun_terbit' => $request->tahun_terbit,
                'harga_buku' => $request->harga_buku,
                'cover_buku' => $request->cover_buku,
                'tipe_id' => $request->tipe_id,
                'status' => $request->status,
            ]);
        
        return redirect('/buku')->with('status', 'Data Buku Berhasil Diubah!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        // Menghapus sementara (Soft Delete)
        // Kategori::destroy($kategori->id);

        // Menghapus permanen
        $buku->forceDelete();

        return redirect('/buku')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}
