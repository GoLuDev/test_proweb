<?php

namespace App\Http\Controllers\Users;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $full = User::find($id);
        $users = User::select('id', 'name', 'sex')->paginate(7);
        return view('users/list', ['users' => $users],
            ['full' => $full]);

    }

    public function show($id)
    {
        $user = user::find($id);
        return view('users/show', ['user' => $user]
        );
    }
}

