<?php


namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Faq;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faqdata = Faq::get();
        return view('dashboard.faq.index', compact('faqdata'));
    }


    public function store(Request $request)
    {

        $faq = $request->question;

        try {
            foreach ($faq  as $key => $q) {
                $model = new Faq();
                $model->question = $q;
                $model->answer = $request->answer[$key];
                $model->save();
            }
            toastSuccess('Data Saved Successfully');
            return redirect('dashboard/faq');
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return back();
        }
    }


    public function delete(Request $request)
    {
        try {
            $res = Faq::find($request->id)->delete();
            toastSuccess('Record deleted successfully1');
            return redirect('dashboard/faq');
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return back();
        }
    }
}
