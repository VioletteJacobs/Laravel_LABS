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
        $validate = $request->validate([
            "title" => "required|max:200",
            "src" => "required|max:200",
            "day" => "required|max:200",
            "month" => "required|max:200",
            "user_id" => "required|max:200",
            "category_id" => "required|max:200",
        ]);
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
        $post->delete();
        return redirect()->back();
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
    
    public function filterc ($id){
        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introblog::all();
    
        $category = Category::all();
        $tag = Tag::all();
        $footer = Footer::first();

        $posts = Post::all();
        $postsCategory = $posts->where("category_id", $id);


        return view('pages.front.showCategory', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts', "postsCategory"));
    }
    public function filtertag($id){
        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introblog::all();
    
        $category = Category::all();
        $tag = Tag::all();
        $footer = Footer::first();

        $posts = Post::all();
        // $postsTag = $posts->where($posts->tags->id);


        return view('pages.front.showtag', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts'));

    }
}
