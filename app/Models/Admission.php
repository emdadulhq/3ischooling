<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function subject(){
        return $this->belongsTo('App\Models\AdmissionSubject', 'admission_subject_id');
    }
    // public function admSubject(){
    //     return $this->belongsToMany('App\Models\AdmissionSubject');
    // }

    public function comments(){
        return $this->hasMany('App\Models\AdmComments');
        }
}
