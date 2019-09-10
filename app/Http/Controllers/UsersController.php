<?php
namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();

        return view('admin.users.index')->with('users', $users);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        flash('User Deleted')->success();

        return redirect()->back();
    }
}
