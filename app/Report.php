<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class Report extends Model
{
    protected $table = 'report';
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
    ];
}
