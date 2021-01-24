<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view( 'welcome', [
            'blogs' => Blog::all()
        ]);
    }

    public function save( Request $request )
    {
        Blog::create([
            'title' => $request->title,
            'lead' => $request->lead,
            'content' => $request->content
        ]);

        return redirect( '/' );
    }
}
