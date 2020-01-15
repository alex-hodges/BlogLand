<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PagesController extends Controller
{
   public function index(){
       $title = 'Welcome to Laravel';
     $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
     $randomPostsContent = Post::inRandomOrder()->limit(2)->get();
     return view ( 'pages.index') ->with('title', $title)->with('posts', $posts)->with('randomPostsContent', $randomPostsContent);
   }

   public function about(){
    $title = 'About us';
       return view ('pages.about') ->with('title', $title);
   }

  

public function faq(){
  
return view ('pages.faq');
}
}
