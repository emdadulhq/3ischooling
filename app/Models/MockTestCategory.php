<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTestCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcategory(){

        return $this->hasMany('App\Models\MockTestCategory', 'parent_id');

    }
}
