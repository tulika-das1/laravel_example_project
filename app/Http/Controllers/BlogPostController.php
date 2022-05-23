<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;
use Illuminate\Support\Facades\Gate;

class BlogPostController extends Controller
{
    public function blogPost(){
        return view('blog');
    }

    public function blogPostUser(Request $request){
        // $response = Gate::inspect('create', BlogPost::class);
        // if ($response->allowed()) {
        //     $blog = new BlogPost();
        //     $blog->title = $request->title;
        //     $blog->description = $request->description;
        //     $blog->user_id = Auth::id();
        //     $blog->save();
        //     return redirect()->route('blog-post-page'); 
        // } else {
        //    return $response->message();
        // }   
            Gate::authorize('create', BlogPost::class);
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
        $blogs = $user->posts()->with('user')->get();
        return view('blog-post-page', ['blogs' => $blogs]);
    }
   
    public function updatePost(Request $request, BlogPost $blog){
        
        // if (! Gate::allows('update-post', $blog)) {
        //     abort(403);
        // }
 
        $response = Gate::inspect('update', $blog);
        
        if ($response->allowed()) {
            // The action is authorized...
        } else {
            return  $response->message();
        }


        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('blog-post-page');
    }

    public function blogPostEdit(BlogPost $blog){

        $response = Gate::inspect('update', $blog);
        
        if ($response->allowed()) {
            // The action is authorized...
        } else {
            return $response->message();
        }

        Gate::authorize('update', $blog);

        return view('blog-edit', ['blog' => $blog]);

    }

    public function blogPostDelete(BlogPost $blog){

        $response = Gate::inspect('update', $blog);
        
        if ($response->allowed()) {
            // The action is authorized...
        } else {
            $response->message();
        }

        Gate::authorize('update', $blog);
        
        $blog->delete();
        return redirect()->route('blog-post-page');
    }
}
