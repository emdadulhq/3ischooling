<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schooling extends Model
{
    use HasFactory;
    protected $table = 'schoolings';
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo('App\Models\SchoolingSubject', 'schooling_subject_id');
    }


}
