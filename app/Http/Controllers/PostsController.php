<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Location;
use App\Models\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->salary = $request->input('salary');
        $post->category_id = $request->input('category');
        $post->location_id = $request->input('location');
        $post->save();
        return redirect('/admin/home');
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
        //
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
        $post = Post::find($id);
        $post->title = $request->input('edit-title');
        $post->description = $request->input('edit-description');
        $post->salary = $request->input('edit-salary');
        $post->category_id = $request->input('edit-category');
        $post->location_id = $request->input('edit-location');
        $post->save();
        return response()->json(array('msg'=> 1), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json(array('msg'=> 1), 200);
    }

    public function destroyall(Request $request)
    {
        foreach ($request->data as $id) {
            $post = Post::find($id);
            $post->delete();
        }
        return response()->json(array('msg'=> 1), 200);
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        return response()->json(Post::find($id));
    }
}
