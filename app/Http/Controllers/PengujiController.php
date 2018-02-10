<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Pengujiuy;
class PengujiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $pengujis = Pengujiuy::all();
        return view('penguji.index',compact('pengujis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penguji.create');
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
              'nama'=>'required|unique:pengujis|max:255',
              'jabatan'=>'required|max:255',
        ]);
        
        $pengujis = new Pengujiuy;
        $pengujis->nama = $request->nama;
        $pengujis->jabatan = $request->jabatan;
        $pengujis->save();
        return redirect()->route('pengujis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pengujis = Pengujiuy::findOrFail($id);
        return view('penguji.show',compact('pengujis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pengujis = Pengujiuy::findOrFail($id);
        return view('penguji.edit',compact('pengujis'));
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
        $this->validate($request,[
             'nama'=>'required|unique:pengujis|max:255',
              'jabatan'=>'required|max:255',
        ]);

        // update data berdasarkan id
                 $pengujis = Pengujiuy::findOrFail($id);
        $pengujis->nama = $request->nama;
        $pengujis->jabatan = $request->jabatan;
        $pengujis->save();
        return redirect()->route('pengujis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengujis = Pengujiuy::findOrFail($id);
        $pengujis->delete();
        return redirect()->route('pengujis.index');  
    }
}
