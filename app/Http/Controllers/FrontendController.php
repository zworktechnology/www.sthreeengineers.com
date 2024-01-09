<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogMaster;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function blogindex()
    {
        $masterblogdata = BlogMaster::where('soft_delete', '!=', 1)->get();
        $data = Blog::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->orderBy('id', 'desc')->get();
        $latestblog = Blog::where('soft_delete', '!=', 1)->where('pined', '!=', 0)->orderBy('id', 'desc')->take(10)->get();

        return view('pages.frontend.blog', compact('data', 'masterblogdata', 'latestblog'));
    }


    public function blogfilter($id, $master_name)
    {
        $masterblogdata = BlogMaster::where('soft_delete', '!=', 1)->get();
        $data = Blog::where('master_blog_id', '=', $id)->where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->orderBy('id', 'desc')->get();
        $latestblog = Blog::where('soft_delete', '!=', 1)->where('pined', '!=', 0)->orderBy('id', 'desc')->take(10)->get();

        return view('pages.frontend.blog', compact('data', 'masterblogdata', 'latestblog'));
    }

    public function blogreadmore($title, $random_id)
    {
        $today = Carbon::now()->format('Y-m-d');
        $masterblogdata = BlogMaster::where('soft_delete', '!=', 1)->get();
        $data = Blog::where('random_id', '=', $random_id)->firstOrFail();
        $comment = Comment::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->where('blog_id', '=', $data->id)->orderBy('id', 'desc')->get();
        $latestblog = Blog::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->orderBy('id', 'desc')->take(4)->get();
        $previousblog = Blog::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->inRandomOrder()->first();
        $nextblog = Blog::where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->inRandomOrder()->first();

        return view('pages.frontend.read-blog', compact('today', 'latestblog', 'data', 'masterblogdata', 'previousblog', 'nextblog', 'comment'));
    }

    public function searchblog(Request $request)
    {
        $term  = $request->get('term');
        $masterblogdata = BlogMaster::where('soft_delete', '!=', 1)->get();
        $data = Blog::where('title','like','%'.$term.'%')->where('soft_delete', '!=', 1)->where('active_status', '!=', 1)->orderBy('id', 'desc')->get();
        $latestblog = Blog::where('soft_delete', '!=', 1)->where('pined', '!=', 0)->orderBy('id', 'desc')->take(10)->get();

        return view('pages.frontend.blog', compact('data', 'masterblogdata', 'latestblog', 'term'));
    }
}
