<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use App\Http\Requests\User\{StoreRequest, UpdateRequest};
use Illuminate\Support\Facades\Hash;

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
    public function store(StoreRequest $request)
    {
        // Cara Insert Pertama
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->save();

        // Cara Kedua
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect To All User
        return redirect('/user')->with('message', 'User Berhasil Dibuat');
    }

    public function show(User $user)
    {
        $title = 'User Detail';

        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' =>  $user
        ]);
    }

    // Return view for form
    public function edit(int $id)
    {
        $title = 'Edit User';

        // Finding User
        $user = User::find($id);

        return Inertia::render('User/Edit', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function update(UpdateRequest $request, int $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Redirect To All User
        return redirect('/user')->with('message', 'User Berhasil Diupdate');
    }

    public function delete(int $id)
    {
        // Finding User
        $user = User::find($id);

        // Delete User
        $user->delete();

        // Redirect To All User
        return redirect('/user')->with('message', 'User Berhasil Dihapus');
    }
}
