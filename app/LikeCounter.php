<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
class LikeCounter extends Model
{
    protected $table = 'likecounters';
    protected $fillable = [
        'user_id',
        'post_id',
    ];
}
