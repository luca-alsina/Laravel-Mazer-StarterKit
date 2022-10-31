<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.pages.user.index', compact('users'));
    }

    public function store()
    {

//        dd(request());

        $data = request()->validate([
            'username' => config('auth.registration.fields.username.validation'),
            'email' => config('auth.registration.fields.email.validation'),
            'first_name' => config('auth.registration.fields.first_name.validation'),
            'last_name' => config('auth.registration.fields.last_name.validation'),
            'password' => config('auth.registration.fields.password.validation'),
        ]);

        $data['password'] = bcrypt($data['password']);

        try {
            User::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.pages.user.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'username' => config('auth.registration.fields.username.validation'),
            'email' => config('auth.registration.fields.email.validation'),
            'first_name' => config('auth.registration.fields.first_name.validation'),
            'last_name' => config('auth.registration.fields.last_name.validation'),
            'password' => config('auth.registration.fields.password.validation'),
        ]);

        $data['password'] = bcrypt($data['password']);

        try {
            $user->update($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }
}
