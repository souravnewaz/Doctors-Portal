<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    public function questionlist()
    {
        $question = Question::all();
        return response()->json([
            'status'=>200,
            'question'=>$question,

        ]);
    }

    public function deletequestion($id)
    {
        $question = Question::find($id);
        if($question)
        {
            $question->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Question Deleted Successfully',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Question Id Not Found ',
            ]);

        }

    }

    public function getquestion($id)
    {
        $question = Question::find($id);

        if($blog)
        {
            return response()->json([
                'status'=>200,
                'question'=>$question,
            ]);

        }

        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'question Id Not Found ',
            ]);

        }

    }

   
}
