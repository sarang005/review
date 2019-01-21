<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(2);
        
        return view('home', compact('blogs'));
    }

    public function create()
    {
        return view('create', compact('blogs'));
    }

    public function store()
    {
        request()->validate([
            'Title' => ['required','min:5','max:50'], // field name should "title"  , first_name
            'Description'=>['required','min:20','max:200'] // description 
        ]);

        $blogs=new Blog();
        $blogs->Title=request('Title');
        $blogs->Description=request('Description');
        $blogs->save();

        return redirect('/blogs');
    }

    public function show($id)
    {
        $blogs=Blog::findorFail($id);
        
        return view('show', compact('blogs'));
    }
}
