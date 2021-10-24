<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StemSubject extends Model
{
    use HasFactory;
    protected $table = 'stem_subjects';
    protected $guarded = '';

    public function stem(){
        return $this ->hasMany('App\Models\Stem');
    }
}
