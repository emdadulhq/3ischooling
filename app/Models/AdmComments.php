<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmComments extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get news
     */

    public function admission(){
        return $this ->belongsTo('App\Models\Admission');
    }

    /**
     * Get user info
     */
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
