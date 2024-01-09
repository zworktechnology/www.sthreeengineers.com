<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.blog.index', compact('data'));
    }

    public function create()
    {
        $today = Carbon::now()->format('Y-m-d');
        $data = Blog::where('soft_delete', '!=', 1)->get();
        $blogmaster = BlogMaster::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.blog.create', compact('today', 'data', 'blogmaster'));
    }

    public function store(Request $request)
    {
        $data = new Blog();

        $randow_unique_key =  Str::random(10);

        $data->random_id = $randow_unique_key;
        $data->blog_date = $request->get('blog_date');
        $data->master_blog_id = $request->get('master_blog_id');
        $data->title = $request->get('title');
        $data->slug_url = $request->get('slug_url');
        $data->short_content = $request->get('short_content');
        $data->meta_keywords = $request->get('meta_keywords');
        $data->blog_content = $request->get('blog_content');
        $data->quotes = $request->get('quotes');
        $data->image_alt = $request->get('image_alt');
        $data->writer_name = $request->get('writer_name');
        $data->writer_mail_address = $request->get('writer_mail_address');
        $data->writer_web_address_address = $request->get('writer_web_address_address');

        $blog_image = $request->blog_image;
        $filename = $data->random_id . '.' . $blog_image->getClientOriginalExtension();
        $request->blog_image->move('assets/backend/blog/blog_image', $filename);
        $data->blog_image = $filename;

        $data->save();

        return redirect()->route('blog.index')->with('add', 'New blog record detail successfully added !');
    }

    public function edit($id)
    {
        $data = Blog::findOrFail($id);
        $blogmaster = BlogMaster::where('soft_delete', '!=', 1)->get();

        return view('pages.backend.blog.edit', compact('data', 'blogmaster'));
    }

    public function update(Request $request, $id)
    {
        $data = Blog::findOrFail($id);

        $data->blog_date = $request->get('blog_date');
        $data->master_blog_id = $request->get('master_blog_id');
        $data->title = $request->get('title');
        $data->slug_url = $request->get('slug_url');
        $data->short_content = $request->get('short_content');
        $data->blog_content = $request->get('blog_content');
        $data->meta_keywords = $request->get('meta_keywords');
        $data->quotes = $request->get('quotes');
        $data->image_alt = $request->get('image_alt');
        $data->writer_name = $request->get('writer_name');
        $data->writer_mail_address = $request->get('writer_mail_address');
        $data->writer_web_address_address = $request->get('writer_web_address_address');

        if ($request->file('blog_image') != "") {
            $blog_image = $request->blog_image;
            $filename = $data->random_id . '.' . $blog_image->getClientOriginalExtension();
            $request->blog_image->move('assets/backend/blog/blog_image', $filename);
            $data->blog_image = $filename;
        } else {
            $old_blog_image = Blog::where('id', '=', $id)->first();
            $current_blog_image = $old_blog_image->blog_image;
            $data->blog_image = $current_blog_image;
        }

        $data->update();

        return redirect()->route('blog.index')->with('update', 'Blog record detail successfully changed !');
    }

    public function active($id)
    {
        $data = Blog::findOrFail($id);

        $data->active_status = 0;

        $data->update();

        return redirect()->route('blog.index')->with('active', 'Blog successfully activated !');
    }

    public function deactive($id)
    {
        $data = Blog::findOrFail($id);

        $data->active_status = 1;

        $data->update();

        return redirect()->route('blog.index')->with('deactive', 'Blog successfully de-activated !');
    }

    public function pin($id)
    {
        $data = Blog::findOrFail($id);

        $data->pined = 1;

        $data->update();

        return redirect()->route('blog.index')->with('active', 'Blog successfully pin it !');
    }

    public function unpin($id)
    {
        $data = Blog::findOrFail($id);

        $data->pined = 0;

        $data->update();

        return redirect()->route('blog.index')->with('deactive', 'Blog successfully un-pin it !');
    }

    public function delete($id)
    {
        $data = Blog::findOrFail($id);

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('blog.index')->with('soft_destroy', 'Successfully deleted the blog record !');
    }

    public function destroy($id)
    {
        $data = Blog::findOrFail($id);

        $blog_image = public_path("assets/backend/blog/blog_image/{$data->blog_image}");
        if (File::exists($blog_image)) {
            File::delete($blog_image);
        }

        $data->delete();

        return redirect()->route('blog.index')->with('destroy', 'Successfully erased the blog master record !');
    }

    public function writterblog(Request $request)
    {
        $data = new Blog();

        $randow_unique_key =  Str::random(10);

        $data->random_id = $randow_unique_key;
        $data->blog_date = $request->get('blog_date');
        $data->master_blog_id = $request->get('master_blog_id');
        $data->title = $request->get('title');
        $data->short_content = $request->get('short_content');
        $data->blog_content = $request->get('blog_content');
        $data->quotes = $request->get('quotes');
        $data->image_alt = $request->get('image_alt');
        $data->writer_name = $request->get('writer_name');
        $data->writer_mail_address = $request->get('writer_mail_address');
        $data->writer_web_address_address = $request->get('writer_web_address_address');

        $blog_image = $request->blog_image;
        $filename = $data->random_id . '.' . $blog_image->getClientOriginalExtension();
        $request->blog_image->move('assets/backend/blog/blog_image', $filename);
        $data->blog_image = $filename;

        $data->save();

        return redirect()->back();
    }
}
