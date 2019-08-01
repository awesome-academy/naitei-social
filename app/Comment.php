<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
    ];

    public function post() {
        $this->belongsTo(Post::class,'post_id');
    }
    
    public function user() {
        $this->belongsTo(User::class,'user_id');
    }
}
