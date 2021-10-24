<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionSubject extends Model
{
    use HasFactory;
    protected $table = 'admission_subjects';
    protected $fillable = [
        'name', 'slug'
    ];

    public function admission(){
        return $this ->hasMany('App\Models\Admission');
    }

}
