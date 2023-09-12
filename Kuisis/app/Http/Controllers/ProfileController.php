<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Points;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user_id = auth()->user()->id;
        $data_poin = Points::where('user_id', $user_id)->sum('point');
        // $poin_user = collect($data_poin['point'])->sum();
        
        $length = Points::where('user_id', $user_id)->count();
        return view('profile',[
            'title' => 'PROFILE',
            'poin_user' => $data_poin
        ]);
    }
}
// where('user_id', $user_id)