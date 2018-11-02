<?php

namespace App\Http\Controllers\Updates;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Queries\SearchThreads;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::all();
        return view('forum.overview', compact('threads'));
//        $search = request('search');
//        $threads = $search ? SearchThreads::get($search) : Thread::feedPaginated();
//        return view('forum.overview', compact('threads', 'search'));
    }

    public function show($id){
        $thread = Thread::find($id);
        if($thread){
            return view('forum.threads.show', compact('thread'));
        }
        #throw error
        return;
    }

    public function create()
    {
        return Auth::user() ? view('forum.threads.create') : redirect(route('threads'));
    }

    public function store(Request $request)
    {
        if(!Auth::user()){
            return false;
        }
        $request->validate([
            'title' => 'required|max:60',
            'body' => 'required'
        ]);

        $thread = new Thread([
            'author_id' => Auth::id(),
            'title' => $request->title,
            'body' => $request->body
        ]);
        if($thread->save()){
            return redirect('/updates/thread/'.$thread->id());
        };
        //return error page here
        return $thread;
    }

    public function edit($id)
    {
        if(Auth::user()) {
            $thread = Thread::find($id);
            return view('forum.threads.edit', ['thread' => $thread, 'tags' => Tag::all(), 'method' => 'PUT', 'route' => 'thread.update']);
        }
        else{
            return view(route('thread'));
        }
    }

    public function update(Request $request, $id)
    {
        if(!Auth::user()){
            return false;
        }
        $thread = Thread::find($id);
        if($thread){
            $thread->title = $request->title;
            $thread->body = $request->body;
            $thread->save();
            return redirect(route('thread.show', $id));
        }
        #Return Error
        return;
    }

    public function destroy($id)
    {
        if(!Auth::user()){
            return false;
        }
        $thread = Thread::find($id);
        Comment::where('parent_id', $id)->delete();
        $thread->delete();
        return redirect(route('threads'));
    }
}
