<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware(["auth", "isWebmaster"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        $commentsValidate = $comments->where("check", 1);
        return view("pages.back.commentB", compact("comments", "commentsValidate"));
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
        // $validate = $request->validate([
        //     "name" => "required|max:200",
        //     "firstname" => "required|max:200",
        //     "email" => "required|max:200",
        //     "content" => "required|max:200",
        //     "post_id" => "required|max:200",
        // ]);
        
        $store = new Comment;
        $postid = explode("/", url()->previous());

        if(Auth::check()){
            $store->name = Auth::user()->name;
            $store->firstname = Auth::user()->firstname;
            $store->email = Auth::user()->email;
            $store->photo = Auth::user()->photo;
            
        } else {
            $store->name = $request->name;
            $store->firstname = $request->firstname;
            $store->email = $request->email;
            $request->photo = "/blog/user.jpeg";
        }

        $store->content = $request->content;
        $store->post_id = end($postid);

        $store->check = 0;
        $store->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $destroy = $comment;
        $destroy->delete();
        return redirect("/commentB");
    }
    
    public function validation($id)
    {

        $user = Comment::find($id);
        $user->check = 1;
        $user->save();
        return redirect()->back();
    }
}
