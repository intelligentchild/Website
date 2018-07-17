<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at' , 'desc')->paginate(10);
        return view('gallery.index')->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
             'name'=> 'required',
        ]);

        //create gallery
        $gallery = new Gallery;
        $gallery->name = $request->input('name');
        $gallery->published = ($request->input('isPublished')=='published');
        $gallery->user_id = auth()->user()->id;
        $gallery->save();

        if(app('App\Http\Controllers\PhotosController')->upload_images($request, $gallery->id, 'Gallery'))
            return redirect('/gallery')->with('success' , 'Gallery Addedd');
        else
            return redirect('/gallery')->with('error' , 'No Gallery Added');  
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.show')->with('gallery' , $gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit')->with('gallery' , $gallery);
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
             'name'=> 'required'
        ]);

        //create gallery

        $gallery = Gallery::find($id);
        $gallery->name = $request->input('name');
        $gallery->published = ($request->input('isPublished')=='published');
        $gallery->save();
        
        app('App\Http\Controllers\PhotosController')->upload_images($request, $gallery->id, 'Gallery');
        return redirect('/gallery')->with('success' , 'Gallery Updated');
        // else
        //     return redirect('/gallery')->with('error' , 'Failed to Update Gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if(auth()->user()->id !== $gallery->user_id){
            return redirect('/gallery')->with('error', 'Unauthorized Page');
        }
        // Storage::delete('public/upload_image/'.$photo->file_name);

        foreach ($gallery->photos as $photo) {
            # code...
            Storage::delete('public/upload_image/'.$photo->file_name);
            $photo->delete();
        }
        $gallery->delete();


        return redirect('/gallery')->with('success', 'Gallery Deleted');  
    }
}
