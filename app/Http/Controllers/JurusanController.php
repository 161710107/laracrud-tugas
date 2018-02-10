<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Jurusan;
class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $jurusans = Jurusan::all();
        return view('jurusan.index',compact('jurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
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
              'nama_jurusan'=>'required|unique:jurusans|max:255',
              'nilai_lulus'=>'required|unique:jurusans|max:255',
        ]);
        
        $jurusans = new Jurusan;
        $jurusans->nama_jurusan = $request->nama_jurusan;
        $jurusans->nilai_lulus = $request->nilai_lulus;
        $jurusans->save();
        return redirect()->route('jurusans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $jurusans = Jurusan::findOrFail($id);
        return view('jurusan.show',compact('jurusans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusans = Jurusan::findOrFail($id);
        return view('jurusan.edit',compact('jurusans'));
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
             'nama_jurusan'=>'required|max:255',
              'nilai_lulus'=>'required|max:255',
        ]);

        // update data berdasarkan id
         $jurusans = Jurusan::findOrFail($id);
        $jurusans->nama_jurusan = $request->nama_jurusan;
        $jurusans->nilai_lulus = $request->nilai_lulus;
        $jurusans->save();
        return redirect()->route('jurusans.index');
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
       $jurusans = Jurusan::findOrFail($id);
        $jurusans->delete();
        return redirect()->route('jurusans.index');  
    }
}
