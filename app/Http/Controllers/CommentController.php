<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
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
        $store = new Comment;

        if(Auth::check()){
            $store->name = Auth::user()->name.' '. Auth::user()->surname;
            $store->email = Auth::user()->email;
            $store->photo = Auth::user()->photo;
            
        } else {
            $store->name = $request->name;
            $store->email = $request->email;
            // $store->photo = ;
        }
        $store->content = $request->content;
        $store->date = "12/01/1995";
        $store->check = 0;
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
