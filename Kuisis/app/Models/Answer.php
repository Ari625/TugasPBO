<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable= [
        'quiz_id',
        'user_id',
        'question_id',
        'option'
    ];
}
