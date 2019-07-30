<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tag;
use App\Comment;
use App\Report;
class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'post_date',
        'user_id',
    ];
    
    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags() {
        return $this-> belongsToMany(Tag::class,'post_tag','post_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class,'post_id');
    }

    public function postlikes() {
        return $this->belongsToMany(User::class,'likecounters','post_id');
    }
    
    public function post_reports() {
        return $this->belongsToMany(User::class,'report','post_id');
    }
}
