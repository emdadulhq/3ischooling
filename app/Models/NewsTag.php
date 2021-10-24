<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTag extends Model
{
    use HasFactory;
    protected $guarded = [];


     /**
     * Get News
     */

    // public function category(){
    //     return $this->hasMany('App\Models\CourseCategory');
    // }

    public function news(){
        return $this ->hasMany('App\Models\News');
    }

    /**
     * Get user info
     */
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
