<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $penerbit = DB::table('films')->get();
        $penerbit = Penerbit::all();
        return view('penerbit.index', ['penerbit' => $penerbit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
            'nama_penerbit' => 'required',
            'alamat_penerbit' => 'required',
            'tlp_penerbit' => 'required'
        ]);

        Penerbit::create($request->all());
        return redirect('/penerbit')->with('status', 'Data Penerbit Berhasil Ditambahkan.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penerbit $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        $request->validate([
            'nama_penerbit' => 'required',
            'alamat_penerbit' => 'required',
            'tlp_penerbit' => 'required'
        ]);

        Penerbit::where('id', $penerbit->id)
            ->update([
                'nama_penerbit' => $request->nama_penerbit,
                'alamat_penerbit' => $request->alamat_penerbit,
                'tlp_penerbit' => $request->tlp_penerbit
            ]);
        return redirect('/penerbit')->with('status', 'Data Penerbit Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        // Menghapus sementara (Soft Delete)
        // Penerbit::destroy($penerbit->id);

        // Menghapus permanen
        $penerbit->forceDelete();

        return redirect('/penerbit')->with('status', 'Data Penerbit Berhasil Dihapus!');
    }
}
