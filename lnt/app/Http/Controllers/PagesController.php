<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
    public function index(){
        return view('pages.start');
    }
    public function about(){
        return view('pages.about');
    }
    public function causes(){
        return view('pages.causes');
    }
    public function events(){
        return view('pages.events');
    }
    public function singleblog($id){
        $post = Post::find($id);
        return view('pages.singleblog')->with('post', $post);
    }
    public function blog(){
    
        $posts = Post::orderBy('title' , 'desc')->paginate(9);
        return view('posts.index')->with('posts', $posts);
    }
    public function donate(){
        return view('pages.donate');
    }
 

}
