<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = [];


     /**
     * Get Course
     */

    // public function category(){
    //     return $this->hasMany('App\Models\CourseCategory');
    // }

    public function course(){
        return $this ->hasMany('App\Models\Course');
    }

    /**
     * Get user info
     */
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
