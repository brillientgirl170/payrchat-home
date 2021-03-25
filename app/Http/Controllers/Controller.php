<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function album(){
      $photos = Post::orderBy('id', 'DESC')->get();
      return view('albums', ['photos'=>$photos]);
    }

    public function aboutUs(){
      return view('about-us');
    }

    public function privacyPolicy(){
      return view('privacy-policy');
    }

    public function termsCondition(){
      return view('terms-condition');
    }
}
