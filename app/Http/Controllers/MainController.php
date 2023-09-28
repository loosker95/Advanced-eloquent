<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Post;

class MainController extends Controller
{
    public function index(){
        // Get all posts and comments
        // $data = Post::with('comments')->get();

        //Get posts where is_active =1
        // $data = Post::with('comments')->where('is_active', 1)->get();
       
        // Get comments where is_active = 1
        // $data = Post::with(['comments' => function($quey){
        //     $quey->where('is_active', 1);
        // }])->get();

        // Get post (not including comments) that has at least 1 comments 

        // Get posts and comments that has at least 1 comment
        // $data = Post::has('comments')->with('comments')->get();

        // Get post that doesn't have any comments
        // $data = Post::has('comments', '>', 0)->with('comments')->get();
        //or
        // $data = Post::doesntHave('comments')->get();

        // Count comments per post
        // $data = Post::withCount('comments')->get();

        // select specific field from posts
        // $data = Post::select(['title', 'body'])->get();

        // Select specific field from comments but must include the foreign key otherwisw it will not return anything
        // $data = Post::with(['comments' => function($query){
        //     $query->select('post_id', 'body', 'is_active');
        // }])->get();
        // or
        // This command also allow to get specific field from comments but don't add any space after the commas
        // $data = Post::with(['comments:post_id,body,is_active'])->get();


        // $data = Post::with('comments:title,')->get();

        $data = Post::with('comments')->get();


        // $data = Post::select(['title', 'body'])->withCount('comments')->get();
        return $data;

        // return view('welcome');
    }
}
