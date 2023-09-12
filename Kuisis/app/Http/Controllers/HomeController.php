<?php

namespace App\Http\Controllers;

use App\Models\quizs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data_quizs = quizs::all();
        $no = 1;
        if (auth()->user()->name == 'admin') {
            return view('admin.home-page', [
                'title' => 'HOME-PAGE',
                'data_quizs' => $data_quizs,
                'no' => $no
            ]);
        } else {
            return view('home-page', [
                'title' => 'HOME-PAGE'
            ]);
        }
    }
}
