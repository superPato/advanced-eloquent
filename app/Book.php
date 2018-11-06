<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    // relación belongsTo
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
