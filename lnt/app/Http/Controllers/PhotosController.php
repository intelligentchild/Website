<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Photo;
class PhotosController extends Controller
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
        $photos = Photo::orderBy('created_at' , 'desc')->paginate(10);
        return view('photos.index')->with('photos', $photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    public function upload_images(Request $request, $photoable_id, $photoable_type ){
        if($request->hasFile('upload_image')){
            $files = $request->file('upload_image');

            foreach ($files as $file) {
                // Get filename with the extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $file->getClientOriginalExtension();
                // filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $file->storeAs('public/upload_image', $fileNameToStore);

                $photo = new Photo;
                // $photo->gallery_id = $gallery_id; //$request->input('gallary_id');
                $photo->photoable_id = $photoable_id;
                $photo->photoable_type = $photoable_type;
                $photo->file_name = $fileNameToStore;
                $photo->file_size = ' ';
                $photo->file_mime = ' ' ;  
                $photo->file_path = '/storage/upload_image/';
                $photo->user_id = auth()->user()->id;
                $photo->save();
            }
            return 1;
        } else{
            return 0;
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // $this->validate($request ,[            
    //     //      'upload_image'=> 'image|nullable|max:1999',
    //     // ]);

    //     //create photo

    //     // Handle File Upload

    //     if($this->upload_images($request, $request->input('gallery_id')) ){
    //         return redirect('/photos')->with('success' , 'Photos Addedd');
    //     }
    //     else{
    //         return redirect('/photos')->with('error' , 'No Photos were Added');  
    //     }

    // }
    // public function store(Request $request)
    // {
    //     $this->validate($request ,[            
    //          'upload_image'=> 'image|nullable|max:1999',
    //     ]);

    //     //create photo

    //     // Handle File Upload
    //     if($request->hasFile('upload_image')){
            
    //         // Get filename with the extension
    //         $filenameWithExt = $request->file('upload_image')->getClientOriginalName();
    //         // Get just filename
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         // Get just ext
    //         $extension = $request->file('upload_image')->getClientOriginalExtension();
    //         // filename to store
    //         $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //         // Upload Image
    //         $path = $request->file('upload_image')->storeAs('public/upload_image', $fileNameToStore);

    //         $photo = new Photo;
    //         $photo->gallary_id = 1;
    //         $photo->file_name = $fileNameToStore;
    //         $photo->file_size = ' ';
    //         $photo->file_mime = ' ' ;  
    //         $photo->file_path = '/storage/upload_image/';
    //         $photo->user_id = auth()->user()->id;
    //         $photo->save();
        

    //         return redirect('/photos')->with('success' , 'Photos Addedd');
    //     } 
    //     else{
    //         return redirect('/photos')->with('error' , 'No Photos were Added');  
    //     }

    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        return view('photos.show')->with('photo' , $photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $post = Post::find($id);
    //     return view('posts.show')->with('post' , $post);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request ,[
    //         'title' => 'required' ,
    //         'body' => 'required'
    //     ]);

    //     //create post

    //     $post = Post::find($id);
    //     $post->title = $request->input('title');
    //     $post->body = $request->input('body');
    //     $post->save();

    //     return redirect('/posts')->with('success' , 'Post Updated');
    // }
    public function delete_photos($id){
                $photo = Photo::find($id);
            if(auth()->user()->id !== $photo->user_id){
                return redirect('/photos')->with('error', 'Unauthorized Page');
            }
            Storage::delete('public/upload_image/'.$photo->file_name);
            
            $photo->delete();
            return 1;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if(delete_photos($id))
            // return redirect('/photos')->with('success', 'Photo Removed'); 
        $photo = Photo::find($id);
        if(auth()->user()->id !== $photo->user_id){
            return redirect('/photos')->with('error', 'Unauthorized Page');
        }
        Storage::delete('public/upload_image/'.$photo->file_name);
        
        $photo->delete();
        return Redirect::back()->with('message','Operation Successful !'); 
    }
}
