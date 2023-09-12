<?php

namespace App\Http\Controllers;

use App\Models\questions;
use App\Models\Answer;
use App\Models\Points;
use Illuminate\Http\Request;
use App\Http\Requests\StorequestionsRequest;
use App\Http\Requests\UpdatequestionsRequest;

class QuestionsController extends Controller
{
    public function listquiz(Request $request)
    {
        $quiz = $request->validate([
            'questions_id' => 'required'
        ]);

        $quizid = $quiz['questions_id'];
        $no_kuis = 0;
        $data_questions = questions::where('quiz_id', $quizid)->get();
        return view('question', [
            'title' => 'QUIZ',
            'data_questions' => $data_questions,
            'no_kuis' => $no_kuis
        ]);
    }
    public function question()
    {
        global $quizid;
        $no_kuis = 0;
        $data_questions = questions::where('quiz_id', $quizid)->get();
        return view('question', [
            'title' => 'QUIZ',
            'data_questions' => $data_questions,
            'no_kuis' => $no_kuis
        ]);
    }
    public function finish()
    {
        $no_id = 11;
        $data_point = points::latest()->take(1)->get();
        return view('finish',[
            'title' => 'FINISH',
            'poin_user' => $data_point,
            'no_id' => $no_id
        ]);
    }
    public function answer(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'quiz_id' => 'required',
            'answer_user_1' => 'required',
            'answer_user_2' => 'required',
            'answer_user_3' => 'required',
            'answer_user_4' => 'required',
            'answer_user_5' => 'required',
            'answer_user_6' => 'required',
            'answer_user_7' => 'required',
            'answer_user_8' => 'required',
            'answer_user_9' => 'required',
            'answer_user_0' => 'required',
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
            'answer_4' => 'required',
            'answer_5' => 'required',
            'answer_6' => 'required',
            'answer_7' => 'required',
            'answer_8' => 'required',
            'answer_9' => 'required',
            'answer_0' => 'required'
        ]);
        $user_id = $validatedData['user_id'];
        $quiz_id = $validatedData['quiz_id'];
        $answer_user_1 = $validatedData['answer_user_1'];
        $answer_user_2 = $validatedData['answer_user_2'];
        $answer_user_3 = $validatedData['answer_user_3'];
        $answer_user_4 = $validatedData['answer_user_4'];
        $answer_user_5 = $validatedData['answer_user_5'];
        $answer_user_6 = $validatedData['answer_user_6'];
        $answer_user_7 = $validatedData['answer_user_7'];
        $answer_user_8 = $validatedData['answer_user_8'];
        $answer_user_9 = $validatedData['answer_user_9'];
        $answer_user_0 = $validatedData['answer_user_0'];
        $answer_1 = $validatedData['answer_1'];
        $answer_2 = $validatedData['answer_2'];
        $answer_3 = $validatedData['answer_3'];
        $answer_4 = $validatedData['answer_4'];
        $answer_5 = $validatedData['answer_5'];
        $answer_6 = $validatedData['answer_6'];
        $answer_7 = $validatedData['answer_7'];
        $answer_8 = $validatedData['answer_8'];
        $answer_9 = $validatedData['answer_9'];
        $answer_0 = $validatedData['answer_0'];

        $poin = 0;

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_0,
                'answer' => $answer_0
            ]);

        
            if ($answer_user_0 == $answer_0) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_1,
                'answer' => $answer_1
            ]);
        
            if ($answer_user_1 == $answer_1) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_2,
                'answer' => $answer_2
            ]);

        
            if ($answer_user_2 == $answer_2) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_3,
                'answer' => $answer_3
            ]);

        
            if ($answer_user_3 == $answer_3) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_4,
                'answer' => $answer_4
            ]);

        
            if ($answer_user_4 == $answer_4) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_5,
                'answer' => $answer_5
            ]);

        
            if ($answer_user_5 == $answer_5) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_6,
                'answer' => $answer_6
            ]);

        
            if ($answer_user_6 == $answer_6) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_7,
                'answer' => $answer_7
            ]);

        
            if ($answer_user_7 == $answer_7) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_8,
                'answer' => $answer_8
            ]);

        
            if ($answer_user_8 == $answer_8) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Answer::create([
                'user_id' => $user_id,
                'question_id' => 1,
                'quiz_id' => $quiz_id,
                'option' => $answer_user_9,
                'answer' => $answer_9
            ]);

        
            if ($answer_user_9 == $answer_9) {
                $poin += 10;
            } else {
                $poin += 0;
            }

            Points::create([
        'quiz_id' => $quiz_id,
        'user_id' => $user_id,
        'point' => $poin
            ]);

        return redirect('/finish');
    }
}
