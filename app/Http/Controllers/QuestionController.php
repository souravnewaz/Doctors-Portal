<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\User;


class QuestionController extends Controller
{
    public function index(){
        if(session('user_type')=='admin'){
            $questions = DB::table('questions')->get();
            return view('admin.questions', compact('questions'));
        } else {
            $questions = DB::table('questions')->where('status', '=', 'active')->get();
            return view('user.questions', compact('questions'));
        }        
        
    }

    public function create(Request $request){
        $validator = $request->validate([
            'question' => 'required',
        ]);

        $user = session('user');
        $user = DB::table('patients')->where('email', $user)->first();
        $user_name = $user->full_name;

        $question = new Question;
        $question->question = $validator['question'];
        $question->created_by = $user_name;
        $question->save();
        return redirect('/questions')->with('success', 'Question posted successfully');
    }
    public function myQuestions(){
        $email = request('email');
        $questions = DB::table('questions')->where('created_by', $email)->get();
        //dd($question);
        return view('user.question-user', compact('questions'));

    }

    public function question(){
        $question_id = request('id');
        $question = DB::table('questions')->find($question_id);
        $comments = DB::table('comments')->where('Question_id', $question_id)->get();
        if(session('user_type')=='admin'){
            return view('admin.question', compact('question','comments'));
        } else {
            return view('user.question', compact('question','comments'));
        }
        

    }


    public function view($id){
        return view('admin.question');
    }
}
