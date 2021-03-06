<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Home\HeroSection;
use App\Models\Home\HowItWorkSection;
use App\Models\Home\WhySellCar;
use App\Models\Home\BlogHeader;
use App\Models\Home\Blogs;
use App\Models\Home\Testominal;
use App\Models\HowItWorkHeader;
use Auth;

class HomeSectionController extends Controller
{
    //
    public function home()
    {
        try {
            $herosection = HeroSection::first();
            $howitworksheader = HowItWorkHeader::first();
            $howitworks  = HowItWorkSection::get();
            $whycarsell  = WhySellCar::first();
            $blogheading = BlogHeader::first();
            $testominals = Testominal::get();
            return view('user_dropdown/home', compact('howitworksheader', 'herosection', 'howitworks', 'whycarsell', 'blogheading', 'testominals'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    public function store_hero_section(Request $request)
    {
        try {
            if ($request->form_type == "Add") {
                $herosection = new HeroSection();
                $message = "Hero Section Added Successfully";
            } else {
                $herosection = HeroSection::find($request->id);
                $message = "Hero Section Updated Successfully";
            }

            $herosection->header = $request->header;
            $herosection->sub_header = $request->sub_header;
            $herosection->text = $request->text;
            if ($herosection->save()) {
                toastSuccess($message);
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }

    public function store_how_it_work_header(Request $request)
    {
        try {
            if ($request->type == "Add") {
                $model = new HowItWorkHeader();
                $message = "Save";
            } else {
                $model = HowItWorkHeader::find($request->id);
                $message = "Update";
            }
            $model->header = $request->header;
            $model->sub_header = $request->sub_header;
            $model->save();
            toastSuccess('Header info ' . $message . ' successfully');
            return Redirect::back();
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }

    public function store_how_it_work(Request $request)
    {

        if ($request->file('file')) {
            $files = $request->file('file');
            foreach ($files  as $key => $file) {
                $imageName = time() . $file->getClientOriginalName();
                $file->move(public_path('images/home/'), $imageName);
                $model = new HowItWorkSection();
                $model->file = $imageName;
                $model->title = $request->title[$key];
                $model->exceed = $request->exceed[$key];
                $model->save();
            }
            toastSuccess("Data saved Successfully");
            return Redirect::back();
        }
    }
    //dlete how it works
    public function how_it_work_delete(Request $request)
    {
        try {
            HowItWorkSection::find($request->id)->delete();
            $oldFile = asset('/images/home/') . '/' . $request->image;
            @unlink($oldFile);
            toastSuccess("Record Deleted Successfully!");
            return Redirect::back();
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //save why car content
    public function why_sell_car(Request $request)
    {
        try {
            if ($request->form_type == "Add") {
                $model = new WhySellCar();
                $message = "Record Added Successfully!";
            } else {
                $model =  WhySellCar::find($request->id);
                $message = "Record Updated Successfully!";
            }
            if ($request->file('file')) {
                $file = $request->file('file');
                $imageName = time() . $file->getClientOriginalName();
                $file->move(public_path('images/home/'), $imageName);
                $model->file = $imageName;
            }
            $model->title = $request->title;
            $model->message = $request->message;
            if ($model->save()) {
                toastSuccess($message);
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //save blog heading
    public function blog_heading(Request $request)
    {
        try {
            if ($request->form_type == "Add") {
                $model = new BlogHeader();
                $message = "Record Added Successfully!";
            } else {
                $model = BlogHeader::find($request->id);
                $message = "Record Updated Successfully!";
            }
            $model->header = $request->header;
            $model->sub_header = $request->sub_header;
            if ($model->save()) {
                toastSuccess($message);
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //save blogs
    public function blogs(Request $request)
    {
        try {
            $model = new Blogs();
            $model->title = $request->title;
            $model->exceed = $request->exceed;
            $model->message = $request->message;
            $model->permalink = $request->permalink;
            $model->user_id = Auth::user()->id;
            if ($request->file('file')) {
                $file = $request->file('file');
                $imageName = time() . $file->getClientOriginalName();
                $file->move(public_path('images/blogs/'), $imageName);
                $model->feature_img = $imageName;
            }
            if ($model->save()) {
                toastSuccess("Blog Added Successfully!");
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //get blog
    public function get_Blog()
    {
        try {
            $blogs = Blogs::get();
            return view('user_dropdown/blog', compact('blogs'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //blog form
    public function add_Blog()
    {
        return view('user_dropdown/add-blog');
    }
    //delete blog
    public function delete_Blog(Request $request)
    {
        try {
            $res = Blogs::find($request->id)->delete();
            if ($res) {
                toastSuccess('Blog Deleted Successfully!');
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //edit blog
    public function edit_Blog($id)
    {
        try {
            $blog = Blogs::find($id);
            return view('user_dropdown/edit-blog', compact('blog'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //update blog
    public function update_Blog(Request $request)
    {
        try {
            $model = Blogs::find($request->id);
            $model->title = $request->title;
            $model->exceed = $request->exceed;
            $model->message = $request->message;
            if ($request->file('file')) {
                $file = $request->file('file');
                $imageName = time() . $file->getClientOriginalName();
                $file->move(public_path('images/blogs/'), $imageName);
                $model->feature_img = $imageName;
            }
            if ($model->save()) {
                toastSuccess("Blog Updated Successfully!");
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //testomianl section 
    public function testominal(Request $request)
    {
        try {
            if ($request->file('file')) {
                $files = $request->file('file');
                foreach ($files  as $key => $file) {
                    $imageName = time() . $file->getClientOriginalName();
                    $file->move(public_path('images/testominal/'), $imageName);
                    $model = new Testominal();
                    $model->title = $request->title[$key];
                    $model->review = $request->review[$key];
                    $model->image = $imageName;
                    $model->paragraph = $request->paragraph[$key];
                    $model->save();
                }
                toastSuccess("Data saved Successfully");
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //testominal delete
    public function testominal_delete(Request $request)
    {
        try {
            $res = Testominal::find($request->id)->delete();
            if ($res) {
                $oldFile = asset('/images/home/') . '/' . $request->image;
                @unlink($oldFile);
                toastSuccess("Record Deleted Successfully!");
                return Redirect::back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
}
