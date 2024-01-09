<?php

namespace App\Http\Controllers;

use App\Models\BlogMaster;
use Illuminate\Http\Request;

class BlogMasterController extends Controller
{
    public function index()
    {
        $data = BlogMaster::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.blog.master.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new BlogMaster();

        $data->master_name = $request->get('master_name');

        $data->save();

        return redirect()->route('blog.master.index')->with('add', 'New blog master record detail successfully added !');
    }

    public function edit($id)
    {
        $data = BlogMaster::findOrFail($id);

        return view('pages.backend.blog.master.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = BlogMaster::findOrFail($id);

        $data->master_name = $request->get('master_name');

        $data->update();

        return redirect()->route('blog.master.index')->with('update', 'Blog master record detail successfully changed !');
    }

    public function delete($id)
    {
        $data = BlogMaster::findOrFail($id);

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('blog.master.index')->with('soft_destroy', 'Successfully deleted the blog master record !');
    }

    public function destroy($id)
    {
        $data = BlogMaster::findOrFail($id);

        $data->delete();

        return redirect()->route('blog.master.index')->with('destroy', 'Successfully erased the blog master record !');
    }
}
