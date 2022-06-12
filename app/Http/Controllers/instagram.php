<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class instagram extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return redirect() -> route('home');
    }


    public function show($instagram)
    {
        $user = User::findOrFail($instagram);

        return view('instagram.index', ['user' => $user]);
    }

    public function create()
    {
        echo "<center>let's create some post<center>";
    }
}