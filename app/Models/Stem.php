<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stem extends Model
{
    use HasFactory;
    protected $table = 'stems';
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo('App\Models\StemSubject', 'stem_subject_id');
    }

    public function comments(){
        return $this->hasMany('App\Models\StemComments');
        }
}
