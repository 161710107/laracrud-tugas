<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $posts = Post::all();
        //'post' nama folder 'index' nama file
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
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
              'title'=>'required|unique:posts|max:255',
              'content'=>'required|min:6',
        ]);
        
        $posts = new Post;
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('post.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                // memanggil data pos berdasrkan id di halaman pos edit
        $posts = Post::findOrFail($id);
        return view('post.edit',compact('posts'));
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
            'title' => 'required|max:255',
            'content' => 'required|min:6'
        ]);

        // update data berdasarkan id
        $posts = Post::findOrFail($id);
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->save();
        return redirect()->route('posts.index');
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
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect()->route('posts.index');  
    }
}
