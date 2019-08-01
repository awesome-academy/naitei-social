<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class FollowAuthor extends Model
{
    protected $fillable = [
        'follower_id',
        'followed_id',
    ];

    public function follower_user() {
        return $this->belongsTo(User::class,'follower_id');
    }
    
    public function followed_user() {
        return $this->belongsTo(User::class,'followed_id');
    }
}
