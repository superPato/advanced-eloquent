<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function manyBooks()
    {
        return $this->belongsToMany(Book::class);
    }

    public function getBooksAttribute()
    {
        return $this->manyBooks()->lists('book_id')->toArray();
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class)
            ->withPivot('score')
            ->withTimestamps();
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
