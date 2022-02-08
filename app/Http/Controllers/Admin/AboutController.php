<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Utils\HelperFunctions;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $aboutdata = AboutUs::get();
        return view('dashboard.about.index', compact('aboutdata'));
    }
    public function store(Request $request)
    {
        try {
            // if ($request->file('image')) {
                // $filePath = HelperFunctions::aboutusimagepath();
                // $files = $request->file('image');
                // foreach ($files  as $key => $file) {
                    // $imagename = HelperFunctions::saveFile(null, $file, $filePath);
                    $model = new AboutUs();
                    // $model->image = $imagename;
                    $model->image_text = $request->image_text;
                    $model->save();
                // }
                toastSuccess('Data Saved Successfully');
                return redirect('dashboard/about');
            // }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    public function delete(Request $request)
    {
        try {
            $res = AboutUs::find($request->id)->delete();
            if ($res) {
                // unlink(public_path() . '/' . $request->image);
                toastSuccess("Record Deleted Successfully!");
                return back();
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return back();
        }
    }
}
