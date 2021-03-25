<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
      public function blogs(){
      return view('blog.blogs');
    }

      public function index(){
      $blogs = Blog::orderBy('id', 'DESC')->get();
      return view('blog.index', ['blogs' => $blogs]);
    }

    public function create(){
      return view('blog.create-blog');
    }

    public function store(Request $request){
      $blog = new Blog();
      $blog->title = $request->title;
      $blog->category = $request->category;
      $blog->meta_description = $request->meta_description;
      $blog->description = $request->description;

      if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore =time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/uploads/photos/',$fileNameToStore);
            $blog->image = $fileNameToStore;
        }else{
            $blog->image = ' ';
        }

      $blog->save();

      return redirect('/blog');

    }
}
