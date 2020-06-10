<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        var_dump($users);die;
        return view('index', ['users' => $users]);
    }
}
