<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Post;
use App\Comment;
use App\LikeCounter;
use App\FollowAuthor;
use App\Report;
use App\Contact;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name', 
        'first_name', 
        'birth_date',
        'email', 
        'password', 
        'sex', 
        'avatar', 
        'phone', 
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this-> hasMany(Post::class, 'user_id');
    }
    
    public function comments() {
        return $this->hasMany(Comment::class,'user_id');
    }

    public function userlikes() {
        return $this->belongsToMany(Post::class,'likecounters','user_id');
    }

    public function follower() {
        return $this->hasMany(FollowAuthor::class,'follower_id');
    }

    public function followed() {
        return $this->hasMany(FollowAuthor::class,'followed_id');
    }

    public function user_reports() {
        return $this->belongsToMany(Post::class,'report','user_id');
    }

    public function contacts() {
        return $this->hasMany(Contact::class,'user_id');
    }
}
