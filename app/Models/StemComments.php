<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StemComments extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get news
     */

    public function stem(){
        return $this ->belongsTo('App\Models\Stem');
    }

    /**
     * Get user info
     */
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
