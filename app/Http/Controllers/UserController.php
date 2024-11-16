<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('User/index', [
            'users' => User::all(),
        ]);
    }
}
