<?php

namespace App\Http\Controllers;

use App\Mail\Newsletter;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Introblog;
use App\Models\Introservice;
use App\Models\Loader;
use App\Models\logo;
use App\Models\Navbar;
use App\Models\Newsletter as ModelsNewsletter;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

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
        $tag = Tag::all();
        $category = Category::all();
        return view("pages.back.create.blog.createPost", compact("tag", "category"));
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
            "content" => "required",
            "category_id" => "required|max:200",
        ]);



        $newEntry = new Post;
        $newEntry->title = $request->title;
        Storage::put("public/img/blog", $request->file("src"));
        $newEntry->src = $request->file("src")->hashName();
        $newEntry->content = $request->content;
        $newEntry->category_id = $request->category_id;
        $newEntry->user_id = Auth::id();
        $newEntry->check = 0;

        
        $newEntry->save();

        foreach ($request->tag as $item) {
            $newEntry->tags()->attach($item, ["post_id" => $newEntry->id]);
            
        }

        return redirect("/blogB");
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
    
        $intro = Introservice::all();
    
        $category = Category::all();
        $tag = Tag::all();
        $post = Post::all();
        
        $comments = Comment::where("post_id", "=", $show->id)->get();
        $commentsvalidate = $comments->where("check", "=", 1);
        $nbrcomments = count($commentsvalidate);
    

        $newsletter = ModelsNewsletter::first();
        $footer = Footer::first();
        return view ("pages.front.blogpost", compact("show", "loader", "nav", "logo", "intro", "category", "tag", "post", "comments", "commentsvalidate", "nbrcomments", "newsletter", "footer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $edit = $post;
        $tag = Tag::all();
        $category = Category::all();
        return view("pages.back.edit.blog.editPost", compact("edit", "tag", "category"));
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
        $validation = $request->validate([
		    "src" => 'required |min:2|max:100',
            "title" => 'required|min:2|max:100',
            "content" => 'required|min:2',
            "category_id" => 'required',

        ]);



        $update = $post;
        $update->title = $request->title;
        // Storage::delete("public/img/blog/".$update->src);
        Storage::put("public/img/blog", $request->file("src"));
        $update->src = $request->file("src")->hashName();

        $update->content = $request->content;
        
        $update->save();
        $update->tags()->detach();
        foreach ($request->tag as $item) {
            $update->tags()->attach($item, ["post_id" => $update->id]);
            
        }
        return redirect("/blogB");
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
        $intro = Introservice::all();
    
        $category = Category::all();
        $tag = Tag::all();

        $newsletter = ModelsNewsletter::first();
        $footer = Footer::first();

        $comments = Comment::all();
        $commentsvalidate = $comments->where("check", "=", 1);


        $search = $request->input("search");
        $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('content', 'LIKE', "%{$search}%")->get();

        
        if ($request->input("search") == null) {
            return redirect()->back();
        } else {

            return view('pages.front.search', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts', 'comments', 'commentsvalidate', "newsletter"));
        }
        
    }
    
    public function filterc ($id){
        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introservice::all();
    
        $category = Category::all();
        $tag = Tag::all();
        
        $posts = Post::all();
        $postsCategory = $posts->where("category_id", $id);
        
        $comments = Comment::all();
        $commentsvalidate = $comments->where("check", "=", 1);
        
        $newsletter = ModelsNewsletter::first();
        $footer = Footer::first();

        return view('pages.front.showCategory', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'posts', "postsCategory", "comments", "commentsvalidate", "newsletter"));
    }
    public function filtertag($id){
        $loader = Loader::all();
        $nav = Navbar::all();
        $logo = logo::first();
        $intro = Introservice::all();
    
        $category = Category::all();
        $tag = Tag::all();
    
        $newsletter = ModelsNewsletter::first();
        $footer = Footer::first();

        $comments = Comment::all();
        $commentsvalidate = $comments->where("check", "=", 1);

        $posts = Post::all();
        $postarray = [];
        $tagarray = [];
        foreach($posts as $item){
            $tagarray = $item->tags->pluck("id")->toArray();
            if(in_array($id, $tagarray)){
                array_push($postarray, $item);
            }
            unset($tagarray);
        }
        // $postsTag = $posts->where($posts->tags->id);


        return view('pages.front.showtag', compact ("loader", "nav", "logo", "category", "tag", "intro", "footer",'postarray', "comments", "commentsvalidate", "newsletter"));
        
    }

    public function validation($id){
        $post = Post::find($id);
        $post->check = 1;
        $post->save();
        return redirect()->back();

    }
}
