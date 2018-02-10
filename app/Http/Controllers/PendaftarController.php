<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Pendaftar;
class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftars = Pendaftar::all();
        return view('pendaftar.index',compact('pendaftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pendaftar.create');
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
              'nama_pendaftar'=>'required|unique:pendaftars|max:255',
              'tempat_lahir'=>'required|min:7',
              'tanggal_lahir'=>'required|unique:pendaftars|max:255',
              'jk'=>'required|max:225',
              'agama'=>'required|max:255',
              'phone'=>'required|unique:pendaftars|max:255',
              
        ]);
        
        $pendaftars = new Pendaftar;
        $pendaftars->nama_pendaftar = $request->nama_pendaftar;
        $pendaftars->tempat_lahir= $request->tempat_lahir;
        $pendaftars->tanggal_lahir = $request->tanggal_lahir;
        $pendaftars->jk = $request->jk;
        $pendaftars->agama = $request->agama;
        $pendaftars->phone = $request->phone ;
        $pendaftars->save();
        return redirect()->route('pendaftars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftars = Pendaftar::findOrFail($id);
        return view('pendaftar.show',compact('pendaftars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
         $pendaftars = Pendaftar::findOrFail($id);
        return view('pendaftar.edit',compact('pendaftars'));
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
             'nama_pendaftar'=>'required|max:255',
              'tempat_lahir'=>'required|min:7',
              'tanggal_lahir'=>'required|max:255',
              'jk'=>'required|max:225',
              'agama'=>'required|max:255',
              'phone'=>'required|max:255',
        ]);

        // update data berdasarkan id
          $pendaftars = Pendaftar::findOrFail($id);
        $pendaftars->nama_pendaftar = $request->nama_pendaftar;
        $pendaftars->tempat_lahir= $request->tempat_lahir;
        $pendaftars->tanggal_lahir = $request->tanggal_lahir;
        $pendaftars->jk = $request->jk;
        $pendaftars->agama = $request->agama;
        $pendaftars->phone = $request->phone ;
        $pendaftars->save();
        return redirect()->route('pendaftars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftars = Pendaftar::findOrFail($id);
        $pendaftars->delete();
        return redirect()->route('pendaftars.index');  
    }
}
