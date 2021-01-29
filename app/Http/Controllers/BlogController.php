<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view( 'welcome', [
            'blogs' => Blog::all(),
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'lead' => 'required',
            'content' => 'required',
        ]);

        Blog::create([
            'title' => $request->title,
            'lead' => $request->lead,
            'content' => $request->content,
        ]);

        return redirect( '/' );
    }

    public function edit(Request $request, int $id)
    {
        return view( 'admin.blog', [
            'blog' => Blog::find( $id ),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required',
            'lead' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::find( $id );

        $blog->title = $request->title;
        $blog->lead = $request->lead;
        $blog->content = $request->content;
        $blog->save();

        return redirect( '/' );
    }
}
