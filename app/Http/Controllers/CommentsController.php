<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $blogs = Comment::orderBy('id', 'DESC')->paginate(2);
        // return view('show', compact('blogs'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        request()->validate
        ([
            'Name' => 
            ['required','min:5','max:50'],
            'Comment'=>
            ['required','min:','max:200']    
        ]);
        $comment=new Comment();
        $comment->Blog_id=$id;
        $comment->Name=request('Name');
        $comment->Comment=request('Comment');
        $comment->Email=request('Email');
        $comment->save();
        
        return back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $blogs=Blog::findorFail($id);
       
        
        // $comments = Comment::where('Blog_id', $id)->orderBy('id', 'DESC')->paginate(2);
        // return view('show', compact('comments'), compact('blogs'));


         $comments = Comment::where('Blog_id', $id)->orderBy('id', 'DESC')->paginate(5);
       
         return view('show', compact('comments', 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param 
     * int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function showAllComments()
    // {
    //     $comments = Comment::orderBy('id', 'DESC')->paginate(2);
       
    //     return view('show', compact('comments'));
    // }
}