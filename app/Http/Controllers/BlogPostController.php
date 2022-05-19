<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;

class BlogPostController extends Controller
{
    public function blogPost(){
        return view('blog');
    }

    public function blogPostUser(Request $request){
        $blog = new BlogPost();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->user_id = Auth::id();
        $blog->save();
        return redirect()->route('blog-post-page');
    }
    public function blogPostList(){ 
        /** @var UserData $user */
        $user = Auth::user();
        $user->posts()->with('user')->get();
        return view('blog-post-page', compact('blogs'));
    }
}
