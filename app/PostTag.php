<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Tag;
class PostTag extends Model
{
    protected $table = 'post_tag';
    protected $fillable = [
        'post_id',
        'tag_id',
    ];
}
