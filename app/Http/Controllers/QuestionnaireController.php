<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionnaireModel;
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
        dd($req->input());
        try {
            $input = $req->except('_token');
            foreach ($input as $data) {
                echo $data->question;
            }
        
        QuestionnaireModel::create($input);
        toastSuccess('Record Inserted successfully!');
        return Redirect::back();
        
        } catch (\Throwable $err) {
            //throw $th;
            toastError($err);
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
