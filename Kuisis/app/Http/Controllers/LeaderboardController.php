<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Points;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function leaderboard(){
        $data_point = Points::all()->sortByDesc('point');
        $data_user = User::all();
        $no = 1;
        return view('leaderboard', [
            'title' => 'LEADERBOARD',
            'data_point' => $data_point,
            'data_users' => $data_user,
            'no' => $no
        ]);
    }
}