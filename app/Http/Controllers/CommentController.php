<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $data = Comment::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.blog.comment.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Comment();

        $data->blog_id = $request->get('blog_id');
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone_number = $request->get('phone_number');
        $data->message = $request->get('message');

        $data->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Comment::findOrFail($id);
        $blog = Blog::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->get();

        return view('pages.backend.blog.comment.edit', compact('data', 'blog'));
    }

    public function update(Request $request, $id)
    {
        $data = Comment::findOrFail($id);

        $data->blog_id = $request->get('blog_id');
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone_number = $request->get('phone_number');
        $data->message = $request->get('message');

        $data->update();

        return redirect()->route('blog.comment.index')->with('update', 'Comment record detail successfully changed !');
    }

    public function active($id)
    {
        $data = Comment::findOrFail($id);

        $data->active_status = 0;

        $data->update();

        return redirect()->route('blog.comment.index')->with('active', 'Comment successfully activated !');
    }

    public function deactive($id)
    {
        $data = Comment::findOrFail($id);

        $data->active_status = 1;

        $data->update();

        return redirect()->route('blog.comment.index')->with('deactive', 'Comment successfully de-activated !');
    }

    public function delete($id)
    {
        $data = Comment::findOrFail($id);

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('blog.comment.index')->with('soft_destroy', 'Successfully deleted the comment record !');
    }

    public function destroy($id)
    {
        $data = Comment::findOrFail($id);

        $data->delete();

        return redirect()->route('blog.comment.index')->with('destroy', 'Successfully erased the comment record !');
    }
}
