<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\{Hash, Redirect};

class UserController extends Controller
{
    public function index()
    {
        $title = 'User';
        $users = User::orderBy('id', 'desc')->get();
        return Inertia::render('User/Index', [
            'title' => $title,
            'users' => $users
        ]);
    }

    // Return view for form
    public function create()
    {
        $title = 'Create User';

        return Inertia::render('User/Create', [
            'title' => $title
        ]);
    }

    // Storing Data
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect To All User
        return Redirect::route('user.index');
    }

    public function show(User $user)
    {
        $title = 'User Detail';

        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' =>  $user
        ]);
    }
}
