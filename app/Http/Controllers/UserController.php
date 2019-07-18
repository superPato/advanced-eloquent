<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getEditManyToMany($user_id)
    {
        $user = User::find($user_id);
        $books = Book::orderBy('title', 'ASC')->lists('title', 'id');

        return view('manytomany.edit', compact('user', 'books'));
    }

    public function putEditManyToMany(Request $request, $user_id)   
    {
        $user = User::find($user_id);

        // $user->manyBooks()->detach();

        // el metodo sync, hace detach  y luego attach
        $user->manyBooks()->sync($request->get('books'));

        return redirect('/');
    }
}
