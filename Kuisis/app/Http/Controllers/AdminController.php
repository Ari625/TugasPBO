<?php

namespace App\Http\Controllers;

use App\Models\questions;
use App\Models\quizs;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        if (auth()->user()->is_admin == 1 || auth()->user()->name == 'admin') {
            return view('admin.dashboard', [
                'title' => 'DASHBOARD'
            ]);
        } else {
            return back();
        }
    }
    public function addquiz()
    {
        if (auth()->user()->is_admin == 1 || auth()->user()->name == 'admin') {
            return view('admin.add-quiz', [
                'title' => 'ADD-QUIZ'
            ]);
        } else {
            return back();
        }
    }

    public function insertquiz(Request $request)
    {
        $addquiz = $request->validate([
            'user_id' => 'required',
            'thumbnail' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        quizs::create($addquiz);

        return redirect('/add-quiz')->with('succses', 'Success Add Quiz');

    }
    public function addquestions()
    {
        if (auth()->user()->is_admin == 1 || auth()->user()->name == 'admin') {
            return view('admin.add-questions', [
                'title' => 'ADD-QUESTIONS'
            ]);
        } else {
            return back();
        }
        
    }

    public function insertquestions(Request $request)
    {
        $addquestion = $request->validate([
            'quiz_id' => 'required',
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'answer' => 'required'
        ]);

        questions::create($addquestion);

        return redirect('/add-questions')->with('succses', 'Success Add Question');
    }

    public function listuser()
    {
        $no = 1;
        $data_user = User::all();
        return view('admin.list-user',[
            'title' => 'LIST-QUIZ',
            'data_user' => $data_user,
            'no' => $no
        ]);
    }
}
