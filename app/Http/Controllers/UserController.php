<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

    public function delete(Request $request): RedirectResponse
    {
        $user = User::find($request->get('id'));
        $user->delete();

        return back();
    }
}
