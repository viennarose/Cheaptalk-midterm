<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('name')->paginate(3);
        return view('pages.authors', compact('users'));
    }
}
