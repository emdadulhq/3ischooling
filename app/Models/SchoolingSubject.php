<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolingSubject extends Model
{
    use HasFactory;
    protected $table = 'schooling_subjects';
    protected $guarded = '';

    public function subcategory(){
            
        return $this ->hasMany('App\Models\SchoolingSubject','parent_id');
    }
}
