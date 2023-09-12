<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class quizs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable= [
        'user_id',
        'thumbnail',
        'title',
        'description'
    ];
    protected $table = 'quizs';
}
