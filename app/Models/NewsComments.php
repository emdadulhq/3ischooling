<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsComments extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get news
     */

    public function news(){
        return $this ->belongsTo('App\Models\News');
    }

    /**
     * Get user info
     */
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
