<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function category(){
        return $this->belongsTo('App\Models\CourseCategory', 'course_categorie_id');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }
}
