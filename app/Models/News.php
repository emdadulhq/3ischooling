<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function tag(){
        return $this->belongsTo('App\Models\NewsTag','news_tag_id');
    }

    public function comments(){
        return $this->hasMany('App\Models\NewsComments');
        }
}
