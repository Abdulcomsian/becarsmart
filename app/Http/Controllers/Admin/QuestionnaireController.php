<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\QuestionnaireModel;
use Illuminate\Support\Facades\Redirect;

class QuestionnaireController extends Controller
{

    // Getting All Questions

    public function index()
    {
        $data = QuestionnaireModel::get();
        return view('user_dropdown/questionnaire', compact('data'));
    }


    public function insert(request $req)
    {
        try {
            for ($i = 0; $i < count($req->question); $i++) {
                $model = new QuestionnaireModel();
                $model->sec_heading = $req->sec_heading;
                $model->sec_subHeading = $req->sec_subHeading;
                $model->question = $req->question[$i];
                $model->placeholder = $req->placeholder[$i];
                $model->step = $i + 1;
                $model->save();
            }
            toastSuccess('Record Inserted successfully!');
            return Redirect::back();
        } catch (\Throwable $err) {
            toastError($err);
            return Redirect::back();
        }
    }

    // Delete

    public function delete(Request $req)
    {
        $id = $req->input('id');
        try {
            QuestionnaireModel::find($id)->delete();
            toastSuccess('Record Deleted successfully!');
            return Redirect::back();
        } catch (\Throwable $err) {
            toastError($err);
        }
    }
}
