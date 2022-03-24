<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function create(){
        Post::create([
            'name'=>'Post One',
            'description'=>'Post Description',
            'user_id'=>1
        ]);
    }
        
        // public function edit($id){
        //     $post = Post::find($id);
        //     if(!Gate::allows('post-update',$post)){
        //        abort(403);
        //     }
        //     Post::find($id)->update([
        //         'name'=>'Post One Updated'
        //     ]);
            
        // }

        public function edit($id){
            $post = Post::find($id);
            if(!Gate::allows('update',$post)){
               abort(403);
            }
            Post::find($id)->update([
                'name'=>'Post One'
            ]);
            
        }
    }

