<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// relación hasMany
    public function books()
    {
    	return $this->hasMany(Book::class);
    }
}
