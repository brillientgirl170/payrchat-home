<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;

class VideoController extends Controller
{
  public function video(){
    $videos = Video::orderBy('id', 'DESC')->get();
    return view('videos', ['videos'=>$videos]);
  }

  public function store(Request $request)
  {
    $slug = Str::slug(rand(), '/');
    $this->validate($request, [
      'post_text' => 'required',
      'status' => 'required',
      'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4'
    ]);

    if($request->hasFile('video')){
          $extension = $request->file('video')->getClientOriginalExtension();
          $fileNameToStore =time().'.'.$extension;
          $path = $request->file('video')->storeAs('public/uploads/videos/',$fileNameToStore);
      }else{
          $fileNameToStore = 'noimage.jpg';
      }

    $video = new Video();
    $video->post_text = $request->post_text;
    $video->status = $request->status;
    $video->video = $fileNameToStore;
    $video->user_id = 1;
    $video->video_slug = $slug;
    $video->save();

    return redirect('/');
  }
}
