<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\QuestionnaireModel;
use App\Models\QuestionaireHeading;
use Illuminate\Support\Facades\Redirect;

class QuestionnaireController extends Controller
{

    // Getting All Questions

    public function index()
    {
        $data = QuestionnaireModel::get();
        $questionaire_heading = QuestionaireHeading::get();
        return view('user_dropdown/questionnaire', compact('data','questionaire_heading'));
    }


    public function insert(request $req)
    {
        try {
            for ($i = 0; $i < count($req->question); $i++) {
                $model = new QuestionnaireModel();
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

    public function insert_headings(request $req)
    {
        try {
            $model = new QuestionaireHeading();
            $model->sec_heading = $req->sec_heading;
            $model->sec_subHeading = $req->sec_subHeading;
            $model->save();
            toastSuccess('Record Inserted successfully!');
            return Redirect::back();
        } catch (\Throwable $err) {
            toastError($err);
            return Redirect::back();
        }
    }

    //edit
    public function edit_Questionaire($id)
    {
        try {
            $questionaire_heading = QuestionaireHeading::find($id);
            return view('user_dropdown/edit-questionaire', compact('questionaire_heading'));
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
            return Redirect::back();
        }
    }
    //update
    public function update_Questionaire(Request $request)
    {
        try {
            $questionaire_heading = QuestionaireHeading::find($request->id);
            $questionaire_heading->sec_heading = $request->sec_heading;
            $questionaire_heading->sec_subHeading = $request->sec_subHeading;
            if ($questionaire_heading->save()) {
                toastSuccess("Questionaire Heading Updated Successfully!");
                return redirect('questionnaire');
            }
        } catch (\Exception $exception) {
            toastError('Something went wrong,try again');
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
    public function delete_headings(Request $req)
    {
        $id = $req->input('id');
        try {
            QuestionaireHeading::find($id)->delete();
            toastSuccess('Record Deleted successfully!');
            return Redirect::back();
        } catch (\Throwable $err) {
            toastError($err);
        }
    }
}
