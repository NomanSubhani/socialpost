<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::orderBy('created_at','desc')->with(['user','likes'])->paginate(5); //also latest
        return view('posts.posts',[
            'posts'=>$posts
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'body'=>'required',
        ]);

        $request->user()->posts()->create($request->only('body'));
        //second
        /* $request->user()->posts()->create([
            'body'=>$request->body
        ]); */

        return back();
    }

    public function destroy(Post $post){

        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
