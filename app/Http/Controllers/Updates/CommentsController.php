<?php

namespace App\Http\Controllers\Updates;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'author_id' => 'required',
            'parent_id' => 'required'
        ]);
        $comment = new Comment([
            'body' => $request->body,
            'author_id' => $request->author_id,
            'parent_id' => $request->parent_id
        ]);
        $comment->save();
        return back();
    }

    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('forum.threads.edit-comment', ['comment' => $comment, 'method' => 'PUT', 'route' => 'comment.update']);
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $request->validate([
            'body' => 'required',
            'author_id' => 'required',
            'parent_id' => 'required'
        ]);
        $comment->body = $request->body;
        $comment->author_id = $request->author_id;
        $comment->parent_id = $request->parent_id;
        $comment->update();
        return redirect(route('thread.show', $comment->parent_id));
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return back();
    }
}
