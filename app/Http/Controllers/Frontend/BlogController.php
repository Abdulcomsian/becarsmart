<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\Blogs;

class BlogController extends Controller
{
    public function Blog_details($id)
    {
        $blog = Blogs::with('user')->where('permalink', $id)->first();
        $featureblogs = Blogs::limit(3)->get();
        return view('frontend/sellcar/blog', compact('blog', 'featureblogs'));
    }

    public function allblogs(){
        $blog = Blogs::with('user')->paginate(20);
        return view('frontend/sellcar/blogs',compact('blog'));
    }
}
