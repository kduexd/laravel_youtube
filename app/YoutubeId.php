<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoutubeId extends Model
{
    protected $table = 'youtubeinfo';
    protected $fillable = [
        'id','youtubeid','create_at','update_at'
    ];
}
