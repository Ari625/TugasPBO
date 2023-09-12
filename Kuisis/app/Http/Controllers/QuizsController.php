<?php

namespace App\Http\Controllers;

use App\Models\quizs;
use App\Http\Controllers\Controller;

class QuizsController extends Controller
{
    public function quizs()
    {
        $data_quizs = quizs::all();
        $no = 1;
        return view('list-quiz',[
            'title' => 'LIST-QUIZ',
            'data_quizs' => $data_quizs,
            'no' => $no
        ]);
    }
}
