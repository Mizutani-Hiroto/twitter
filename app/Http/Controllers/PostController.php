<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index',compact('posts'));
        //indexは作成した投稿の一覧です
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        //
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
            'title' => 'required',
            'content' => 'required',
            ]);
            //validationの設定
        $post = new Post();
        //新たにポストモデルのデータを作成。
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        //titleやcontentに$requestに保存されているPostモデルのカラム（ある項目）ごと受け取る
        $post->save();
        return redirect()->route('posts.show',['id' =>$post->id])->with('message','Post was successfully created.');
        //$oist->save();で、作成したモデルのデータを保存。
        //posts/:idというURLにリダイレクトする。
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
        //compact('post')でビューに変数を渡すことができる
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            ]);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        

        return redirect()->route('posts.show', ['id' => $post->id])->with('message', 'Post was successfully updated.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        
        return redirect()->route('posts.index');
        //
    }
}
