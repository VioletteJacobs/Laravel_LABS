<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Introblog;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $show = $post;

        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
    
        $intro = Introblog::all();
    
        $category = Category::all();
        $tag = Tag::all();
        $post = Post::all();
        $comments = Comment::where("post_id", "=", $show->id)->get();
        $commentsvalidate = $comments->where("check", "=", 1);
        $nbrcomments = count($commentsvalidate);
    

        // $newsletter = Newsletter::first();
        $footer = Footer::first();
        return view ("pages.front.blogpost", compact("show", "loader", "nav", "logo", "intro", "category", "tag", "post", "comments", "commentsvalidate", "nbrcomments", "footer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function search(Request $request){

        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introblog::all();
    
        $category = Category::all();
        $tag = Tag::all();
        // $newsletter = Newsletter::first();
        $footer = Footer::first();


        $search = $request->input("search");
        $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('content', 'LIKE', "%{$search}%")->get();
        return view('pages.front.search', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts'));
    }
    
    public function filterc (Request $request){
        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introblog::all();
    
        $category = Category::all();
        $tag = Tag::all();
        $footer = Footer::first();

        $posts = Post::where("category_id", $request->id );
        
        return view('pages.front.showCategory', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts'));
    }
}
