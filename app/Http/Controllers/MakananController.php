<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Makanan;
class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data makanan melalui model 'makanan'
        $makanans = Makanan::all();
        //'makanan' nama folder 'index' nama file
        return view('makanan.index',compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('makanan.create');
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
              'nama_makanan'=>'required|unique:makanans|max:255',
              'ingredients'=>'required|min:6',
              'kode_produksi'=>'required|unique:makanans|max:255',
        ]);
        
        $makanans = new Makanan;
        $makanans->nama_makanan = $request->nama_makanan;
        $makanans->ingredients = $request->ingredients;
        $makanans->kode_produksi = $request->kode_produksi;
        $makanans->save();
        return redirect()->route('makanans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $makanans = Makanan::findOrFail($id);
        return view('makanan.show',compact('makanans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data makanan berdasrkan id di makanan edit
        $makanans = Makanan::findOrFail($id);
        return view('makanan.edit',compact('makanans'));
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
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
             'nama_makanan'=>'required|max:255',
              'ingredients'=>'required|min:6',
              'kode_produksi'=>'required|max:255',
        ]);

        // update data berdasarkan id
         $makanans = Makanan::findOrFail($id);
        $makanans->nama_makanan = $request->nama_makanan;
        $makanans->ingredients = $request->ingredients;
        $makanans->kode_produksi = $request->kode_produksi;
        $makanans->save();
        return redirect()->route('makanans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
       $makanans = Makanan::findOrFail($id);
        $makanans->delete();
        return redirect()->route('makanans.index');  
    }
}
