<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\FilterTag;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::all();
        $posts = Post::orderBy('title' , 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'title' => 'required' ,
            'body' => 'required'
        ]);

        //create post

        $tags = explode(",", $request->input('tags'));

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        // $post->tag($tags);
        $post->save();

        foreach ($tags as $tag) {
            # code...
            $filterTag = FilterTag::firstOrNew(array('tag_name' => $tag ));
            // $filterTag->tag_name = $tags[0];
            $filterTag->save();
            $filterTag->posts()->save($post);
        }

        app('App\Http\Controllers\PhotosController')->upload_images($request, $post->id, 'Post');
        return redirect('/posts')->with('success' , 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post' , $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post' , $post);
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
        $this->validate($request ,[
            'title' => 'required' ,
            'body' => 'required'
        ]);

        //create post
        $newTags = explode(",", $request->input('tags'));

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        $oldTags =$post->filterTags;
        foreach ($oldTags as $tag) {
            if ( in_array($tag->tag_name, $newTags) ){
                $newTags = array_diff($newTags, array($tag->tag_name));
            }
            else{
                $tag->posts()->detach();
            }
        }

        foreach ($newTags as $tag) {
            # code...

            $filterTag = FilterTag::firstOrNew(array('tag_name' => $tag ));
            // $filterTag->tag_name = $tags[0];
            $filterTag->save();
            $filterTag->posts()->save($post);
        }
        app('App\Http\Controllers\PhotosController')->upload_images($request, $post->id, 'Post');
        return redirect('/posts')->with('success' , 'Post Updated');
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
        if(auth()->user()->id !== $post->user_id){
            return redirect('posts')->with('error', 'Unauthorized Page');
        }
        $oldTags =$post->filterTags;
        foreach ($oldTags as $tag) {
            $tag->posts()->detach();
        }
        foreach ($post->photos as $photo) {
            Storage::delete('public/upload_image/'.$photo->file_name);
            $photo->delete();
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');    
    }
}
