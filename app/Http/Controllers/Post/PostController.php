<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('id', 'DESC')->get();
      $videos = Video::orderBy('id', 'DESC')->get();
      return view('welcome', ['posts'=>$posts,'videos'=>$videos]);
    }

    public function store(Request $request)
    {
      $slug = Str::slug(rand(), '/');
      $this->validate($request, [
        'post_text' => 'required',
        'status' => 'required',
        'photo' => 'required|mimes:jpg,bmp,png,pdf,ppx,webm,jpeg|max:1999',
      ]);

      if($request->hasFile('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore =time().'.'.$extension;
            $path = $request->file('photo')->storeAs('public/uploads/photos/',$fileNameToStore);
        }else{
            $fileNameToStore = 'novideo.mp4';
        }

      $post = new Post();
      $post->post_text = $request->post_text;
      $post->status = $request->status;
      $post->photo = $fileNameToStore;
      $post->user_id = 1;
      $post->photo_slug = $slug;
      $post->save();

      return redirect('/');
    }
}
