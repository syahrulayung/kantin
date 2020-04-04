<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table pegawai
        $produk = DB::table('produks')->get();
 
        // mengirim data pegawai ke view index
        return view('produks.index')->with('produk',$produk);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crt()
    {
        return view('produks.create');
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

            'namaprodusen' => 'required',

            'namamakanan' => 'required',

            'hargamakanan' => 'required',

            'stok' => 'required',

        ]);

  

        produk::create($request->all());

   

        return redirect('/produks');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /// mengambil data pegawai berdasarkan id yang dipilih
        DB::table('produks')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('produks.edit',['produk' => $produk]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('produks')->where('id',$request->id)->update([
        'namaprodusen' => $request->namaprodusen,
        'namamakanan' => $request->namamakanan,
        'hargamakanan' => $request->hargamakanan,
        'stok' => $request->stok
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect()->route('produks.index')
->with('success','produk updated successfully');;
//         $request->validate([

//             'namaprodusen' => 'required',

//             'namamakanan' => 'required',
            
//             'hargamakanan' => 'required',
            
//             'stok' => 'required',


//         ]);

  
// $produks->update($request->all());
// return redirect()->route('produks.index')
// ->with('success','produk updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks->delete();
return redirect()->route('produks.index')
->with('success','Blog deleted successfully');
    }
}
