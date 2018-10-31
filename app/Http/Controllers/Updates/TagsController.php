<?php

namespace App\Http\Controllers\Updates;

use App\Tag;
use App\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'description' => 'max:60'
        ]);
        $tag = new Tag([
           'name' => $request->name,
           'description' => $request->descriptioon
        ]);
        $tag->save();
        return $tag;
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        if($tag) {
//            return view('forum.overview', ['threads' => Thread::feedByTagPaginated($tag), 'activeTag' => $tag]);
        return redirect(route('threads'));
        }
        #throw error
        return;
    }
}
