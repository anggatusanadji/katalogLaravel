<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use App\Penerbit;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_kategori = Kategori::all()->count();
        $jumlah_buku = Buku::all()->count();
        $jumlah_penerbit = Penerbit::all()->count();
        $jumlah_admin = User::all()->count();
        
        return view('dashboard', compact('jumlah_kategori', 'jumlah_buku', 'jumlah_penerbit', 'jumlah_admin'));
    }
 
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function account()
    // { 
    //     $user = User::all();
    //     return view('account', ['user' => $user]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(User $user)
    // {
    //     return view('account', compact('user'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'username' => 'required',  
    //         'alamat' => 'required',  
    //         'email' => 'required' 
    //     ]);

    //     User::where('id', $user->id)
    //         ->update([
    //             'name' => $request->name,
    //             'username' => $request->username,
    //             'alamat' => $request->alamat,
    //             'email' => $request->email,
    //         ]);
    //     return redirect('/account');
    // }
}
